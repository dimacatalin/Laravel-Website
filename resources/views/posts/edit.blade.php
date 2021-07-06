@extends('layouts.app')

@section('content')
    <h1 class="text-warning" id="csz">Editare Tutorial</h1>
    <br>
    <br>
    {!! Form::open(['action'=> ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
        <div class="form-group text-warning" id="csz">
            {{Form::label('title','Titlu')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placeholder'=>'Title'])}}
        </div>
        <div class="form-group text-warning" id="csz">
            {{Form::label('body','Continut')}}
            {{Form::textarea('body',$post->body,['class'=>'form-control','placeholder'=>'Body'])}}
        </div>
        <div class="form-group text-warning" id="csz">
            {{Form::file('cover_image')}}
        </div>
        <div class="form-group text-warning" id="csz">
            {{Form::label('video','Video')}}
            {{Form::text('video',$post->video,['class'=>'form-control','placeholder'=>'video link'])}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Editeaza',['class'=>'btn btn-warning'])}}
    {!! Form::close() !!}
    
@endsection