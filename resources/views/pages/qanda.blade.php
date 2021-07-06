@extends('layouts.app')

@section('content')
{{-- 
@if (Auth::check() && Auth::user()->rol == 1)

<div class="row justify-content-center">
    <a href="/" class="btn btn-primary align-content-center">Creaza Intrebare cu Raspuns</a>
</div>

<br>
<br>
@endif





               
<div class="card bg-dark">
    <div class="card-body">
        <p id="csz" class="text-warning card-text"> <b>Intrebare:</b>  Ce pot sa fac atunci cand inamicul meu ingheata minionii?</p>
        <hr class="bg-warning">
        <p id="csz" class="text-warning card-text"> <b>Raspuns:</b>  Cel mai sigur lucru de facut este sa iti chemi coechipierul 
                                                                        de pe pozitia jungla pentru a te putea ajuta sa impingi cu minionii 
                                                                        tai in tureta si sa se reseteze minionii. </p>
    </div>
    @if (Auth::check() && Auth::user()->rol == 1)
    <div class="card-footer ">
        <div class="row justify-content-center">
            <a href="/" class="btn btn-danger">Sterge</a>
        </div>
    </div>
    @endif
</div>      

<br>
<br>

<div class="card bg-dark">
    <div class="card-body">
        <p id="csz" class="text-warning card-text"> <b>Intrebare:</b>  Cand ma pot deplasa pe alte linii ca jucator de MID ?</p>
        <hr class="bg-warning">
        <p id="csz" class="text-warning card-text"> <b>Raspuns:</b>  Te poti deplasa pe alte linii doar atunci cand adversarul lipseste sau cand ai impins minionii tai pana in tureta. </p>
    </div>
    @if (Auth::check() && Auth::user()->rol == 1)
    <div class="card-footer ">
        <div class="row justify-content-center">
            <a href="/" class="btn btn-danger">Sterge</a>
        </div>
    </div>
    @endif
</div>  

<br>
<br>

<div class="card bg-dark">
    <div class="card-body">
        <p id="csz" class="text-warning card-text"> <b>Intrebare:</b>  Atunci cand raman in urma, cum pot sa revin inapoi in joc?</p>
        <hr class="bg-warning">
        <p id="csz" class="text-warning card-text"> <b>Raspuns:</b>  Cel mai sigur lucru de facut este sa iti chemi coechipierul 
                                                                        de pe pozitia jungla pentru a te putea ajuta sa impingi cu minionii 
                                                                        tai in tureta si sa se reseteze minionii. </p>
    </div>
    @if (Auth::check() && Auth::user()->rol == 1)
    <div class="card-footer ">
        <div class="row justify-content-center">
            <a href="/" class="btn btn-danger">Sterge</a>
        </div>
    </div>
    @endif
</div>       --}}


<h1 id="csz" class="text-warning">Creaza o cerere pentru recenzie la videoclip</h1>
    <br>
    <br>
    {!! Form::open() !!}
        <div class="form-group text-warning" id="csz">
            {{Form::label('title','Linkul videoclipului, cel cu embed')}}
            {{Form::text('title','',['class'=>'form-control','placeholder'=>'Link'])}}
        </div>
        
        <div class="form-group text-warning" id="csz">
            {{Form::label('body','Text')}}
            {{Form::text('body','',['class'=>'form-control','placeholder'=>'Text'])}}
        </div>
        <br>
        {{Form::submit('Cere recenzie',['class'=>'btn btn-warning'])}}
    {!! Form::close() !!}
    

 
            
 


@endsection
