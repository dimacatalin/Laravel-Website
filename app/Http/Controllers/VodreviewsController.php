<?php

namespace App\Http\Controllers;
use App\Vodreview;
use Illuminate\Http\Request;

class VodreviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $vodreviews =  Vodreview::orderBy('created_at','desc')->paginate(2);
        return view('vodreviews.index1')->with('vodreviews', $vodreviews);
    }

    public function index2()
    {
        $vodreviews =  Vodreview::orderBy('created_at','desc')->paginate(2);
        return view('vodreviews.index2')->with('vodreviews', $vodreviews);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vodreviews.create');
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
            'body'=>'required',
            'video'=>'required',
            'feedback'=>'nullable'
            ]);

        $vodreview = new Vodreview;
        $vodreview->body = $request->input('body');
        $vodreview->video = $request->input('video');
        $vodreview->user_id = auth()->user()->id;
        $vodreview->feedback = null;
        $vodreview->save();
    
        return redirect('/vodreviews')->with('succes', 'Videoclipul tau a fos trimis catre specialistii nostrii');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        $vodreview = Vodreview::find($id);;

        $vodreview->feedback = $request->input('feedback');
        $vodreview->save();
        return redirect('/feedback')->with('succes', 'Recenzie trimisa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
