@extends('layouts.app')

@section('content')
    <h1 id="csz" class="align-content-center text-warning">{{$post->title}}</h1>
    <hr>
    {{-- <img style="width: 200px; height: 200px" src="/storage/cover_images/{{$post->cover_image}}"> --}}
    @if ($post->video != null)
    <div class="embed-responsive embed-responsive-21by9">
        <iframe class="embed-responsive-item" src="{{ $post->video }}"></iframe>
    </div>
    <hr>
        {{-- <iframe width="560" height="315" src="{{ $post->video }}" frameborder="0" allowfullscreen> --}}
    {{-- </iframe> --}}
    @endif
    
    <div class="container">
        <h3 class="text-warning">
        {{$post->body}}
        <h3>
    </div>
    <hr>
    <small id="csz" class="text-warning" >{{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    {{-- daca nu e utilizator inregistrat atunci nu poate vedea butoanele de edit si delete --}}
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
            <div class="row">
                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning ">Editeaza</a>
                
                {!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pill-right'])!!}

                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Sterge',['class'=>'btn btn-danger '])}}

                {!!Form::close() !!}
            </div>
            
            

            
        @endif
    @endif
@endsection