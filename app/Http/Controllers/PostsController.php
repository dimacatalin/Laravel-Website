<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Create a new controller instance.
     * pentru access control (trebuie sa fii logat pentru a crea o postare noua)
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index','show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts =  Post::all()
        $posts =  Post::orderBy('created_at','desc')->paginate(3);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this-> validate($request,[
        'title'=>'required',
        'body'=>'required',
        'cover_image'=>'image|nullable|max:1800',
        'video' => 'required'
        ]);

        //adaugarea de fisier
        if($request->hasFile('cover_image')){
            //daca a ales sa adauge imagine
            //get filename with extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //get just filaname
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //get just extension
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            //filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload image
            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
        } else {
            //daca nu a adaugat imagine
            $fileNameToStore = 'FaraImagine.jpg';
        }
        
        $post = new Post;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = auth()->user()->id;
        $post->video = $request->input('video');
        $post->cover_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('succes', 'Tutorialul a fost postat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //verificam daca userul care editeaza e cel care a creat postarea
            if(auth()->user()->id != $post->user_id)
            {
                return redirect('/posts')->with('error','nu poti edita articolul altei persoane');
            }

        return view('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this-> validate($request,[
            'title'=>'required',
            'body'=>'required',
            'cover_image'=>'image|nullable|max:1800',
            'video' => 'required'
             ]);

            if($request->hasFile('cover_image')){
                //daca a ales sa adauge imagine
                //get filename with extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                //get just filaname
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                //get just extension
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                //filename to store
                $fileNameToStore = $filename.'_'.time().'.'.$extension;
                //upload image
                $path = $request->file('cover_image')->storeAs('public/cover_images',$fileNameToStore);
            }
            
            $post = Post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('body');
            $post->video = $request->input('video');

            //daca am adaugat alta imagine o sterg pe cea initiala si o adaug pe cea noua altfel ramane imaginea initiala
            if($request->hasFile('cover_image')){
                Storage::delete('public/cover_images/'.$post->cover_image);
                $post->cover_image = $fileNameToStore;
            }

            $post->save();
    
            return redirect('/posts')->with('succes', 'Tutorial Updatat');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        //verificam daca userul care sterge e cel care a creat postarea
        if(auth()->user()->id != $post->user_id)
        {
            return redirect('/posts')->with('error','Nu poti sterge articolul altei persoane');
        }

        if($post->cover_image != 'noimage.jpg'){
            Storage::delete('public/cover_images/'.$post->cover_image);
        }

        $post->delete();
        return redirect('/posts')->with('succes', 'Postare stearsa');
    }
}