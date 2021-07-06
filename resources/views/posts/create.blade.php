@extends('layouts.app')

@section('content')
    <h1 id="csz" class="text-warning">Creaza un tutorial</h1>
    <br>
    <br>
    {!! Form::open(['action'=> 'PostsController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
        <div class="form-group text-warning" id="csz">
            {{Form::label('title','Titlu')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Titlu'])}}
        </div>
        <br>
        <div class="form-group text-warning" id="csz">
            {{Form::label('body','Continut')}}
            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Continut'])}}
        </div>
        <br>
        <div class="form-group text-warning" id="csz">
            {{Form::file('cover_image')}}
        </div>
        <br>
        <div class="form-group text-warning" id="csz">
            {{Form::label('video','Linkul videoclipului ( cel cu "embed" )')}}
            {{Form::text('video','',['class'=>'form-control','placeholder'=>'Link'])}}
        </div>
        <br>
        {{Form::submit('Posteaza',['class'=>'btn btn-warning'])}}
    {!! Form::close() !!}
    
@endsection