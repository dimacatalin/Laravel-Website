@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark text-warning">
                <div class="card-header text-center"><h1 id="csz">Tutorialele postate de tine<h1></div>

                <div class="card-body text-center">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="/posts/create" class="btn btn-primary">Creaza tutorial</a>
                    <br>
                    <br>
                    @if (count($posts) > 0)
                    <table class="table table-striped">
                        <tr>
                            <th>Titlu</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Editeaza</a></td>
                            <td>{!!Form::open(['action'=>['PostsController@destroy', $post->id], 'method'=>'POST', 'class'=>'pill-right'])!!}

                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('Sterge',['class'=>'btn btn-danger'])}}
                        
                            {!!Form::close() !!}</td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                        <p>Nu ai creat niciun tutorial</p>
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
