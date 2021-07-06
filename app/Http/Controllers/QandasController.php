<?php

namespace App\Http\Controllers;
use App\Qanda;
use Illuminate\Http\Request;

class QandasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $qandas =  Qanda::orderBy('created_at','desc')->paginate(3);
        return view('qandas.index')->with('qandas', $qandas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('qandas.create');
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
            'question'=>'required',
            'answer'=>'required'
            ]);
    
            
            $qanda = new Qanda;
            $qanda->question = $request->input('question');
            $qanda->answer = $request->input('answer');

            $qanda->save();
    
            return redirect('/qandas')->with('succes', 'Intrebarea adresata frecvent a fost postata');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $qanda = Qanda::find($id);
        $qanda->delete();
        return redirect('/qandas')->with('succes', 'Intrebare stearsa');
    }
}
