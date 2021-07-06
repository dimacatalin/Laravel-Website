@extends('layouts.app')

@section('content')

@if (Auth::check() && Auth::user()->rol == 1)

<div class="row justify-content-center">
    <a href="/qandas/create" class="btn btn-primary align-content-center">Creaza Intrebare cu Raspuns</a>
</div>

<br>
<br>
@endif

@if (count($qandas) > 0)
        @foreach ($qandas as $qanda)

        <div class="card bg-dark">
            <div class="card-body">
                <p id="csz" class="text-warning card-text"> <b>Intrebare:</b>  {{$qanda->question}}</p>
                <hr class="bg-warning">
                <p id="csz" class="text-warning card-text"> <b>Raspuns:</b> {{$qanda->answer}}</p>
            </div>
            @if (Auth::check() && Auth::user()->rol == 1)
            <div class="card-footer ">
                <div class="row justify-content-center">

                    {!!Form::open(['action'=>['QandasController@destroy', $qanda->id], 'method'=>'POST', 'class'=>'pill-right'])!!}

                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('Sterge',['class'=>'btn btn-danger '])}}

                    {!!Form::close() !!}

                </div>
            </div>
            @endif
        </div>     
        <br>
        <br>

        @endforeach
        {{$qandas->links()}}
    @else
        <p class="text-warning">Nu exista nicio intrebare adresata frecvent</p>
    @endif


@endsection