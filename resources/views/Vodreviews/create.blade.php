@extends('layouts.app')

@section('content')

<h1 id="csz" class="text-warning">Creaza o cerere penru recenzie la videoclip</h1>
    <br>
    <br>

    {!! Form::open(['action'=> 'VodreviewsController@store', 'method' => 'POST']) !!}

   

    <div class="form-group text-warning" id="csz">
        {{Form::label('video','Linkul videoclipului, cel cu "embed"')}}
        {{Form::text('video','',['class'=>'form-control','placeholder'=>'Link'])}}
    </div>
    
    <br>
    <div class="form-group text-warning" id="csz">
        {{Form::label('body','Text')}}
        {{Form::text('body','',['class'=>'form-control','placeholder'=>'Text'])}}
    </div>
    
    <br>
    {{Form::submit('Cere recenzie',['class'=>'btn btn-warning'])}}
    {!! Form::close() !!}

@endsection