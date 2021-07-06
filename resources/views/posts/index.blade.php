@extends('layouts.app')

@section('content')
    <h1 id="csz" class="text-warning">Tutoriale</h1>
    <br>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img class="rounded float-left" id="imagine" src="/storage/cover_images/{{$post->cover_image}}" alt="imagine tutorial">
                    </div>
                        
                    <div class="col-md-8 col-sm-8">
                        <h3 class="text-warning"> <a href="/posts/{{$post->id}}" id="csz" class="text-warning">{{$post->title}}</a> </h3>
                        <br>
                        <h4 class="text-warning"> {{$post->body}} </h4>
                        <small class="text-warning">{{$post->created_at}} by {{$post->user->name}}</small>
                    </div>

                </div>  
            </div>
            <br>
            <br>
        @endforeach
        {{$posts->links()}}
    @else
        <p class="text-warning">Nu exista niciun tutorial</p>
    @endif
@endsection