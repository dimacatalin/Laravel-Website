@extends('layouts.app')

@section('content')

<h1 id="csz" class="text-warning">Creaza o intrebare adresata frecvent (FAQ)</h1>
    <br>
    <br>

    {!! Form::open(['action'=> 'QandasController@store', 'method' => 'POST']) !!}

   

    <div class="form-group text-warning" id="csz">
        {{Form::label('question','Intrebare')}}
        {{Form::text('question','',['class'=>'form-control','placeholder'=>'Intrebare'])}}
    </div>
    
    <br>
    <div class="form-group text-warning" id="csz">
        {{Form::label('answer','Raspuns')}}
        {{Form::text('answer','',['class'=>'form-control','placeholder'=>'Raspuns'])}}
    </div>
    
    <br>
    {{Form::submit('Posteaza',['class'=>'btn btn-warning'])}}
    {!! Form::close() !!}

@endsection