@extends('layouts.app')

@section('content')

<div class=" row justify-content-center">
    
    <h1 id="csz" class="text-warning">Videoclipuri trimise pentru a primi o recenzie</h1>
</div>

<br><br>

<div class="row">
    <div class="col-md-6 col-sm-6">

            <div class="card bg-dark">
                <div class="card-body">
                    <div class="well">
                        <div class="row">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/eGXcsxxg4o8?controls=0"></iframe>
                            </div>
                    </div>
                    <br>
                    <div>        
                            
                            <h4 id="csz" class="text-warning"> Buna seara, nu inteleg cum as putea sa farmez eficient pentur a tine pasul cu adversarul... In acest videoclip aveam un avantaj considerabil in farm, iar adversarul a reusit sa ma depaseasca. </h4>
                            {{-- <small class="text-warning">{{$post->created_at}} by {{$post->user->name}}</small> --}}
                    
                
                    </div>  
                </div>
                <br>
                
                
                
                </div>
                <div class="card-footer">
                    <div class="row">
                    <div class="container">
                        <div class="form-group text-warning" id="csz">
                            {{Form::label('body','Ofera o recenzie')}}
                            {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Feedback'])}}
                        </div>
                    </div>
                        
                </div>  
                <div class="row justify-content-center">
                    <a href="/" class="btn btn-warning">Ofera Recenzie</a>
                </div>
            </div>
            </div>  
    </div>

    <div class="col-md-6 col-sm-6">

        <div class="card bg-dark">
            <div class="card-body">
                <div class="well">
                    <div class="row">
                            <div class="embed-responsive embed-responsive-21by9">
                                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Mm-L495Ks0M?controls=0"></iframe>
                            </div>
                    </div>
                    <br>
                    <div>        
                  

                            <h4 id="csz" class="text-warning"> Salut! la minutul 3:40, dupa ce am terminat de facut prima ruta in jungla si nu mai am ce mostrii sa omor, in cazul in care linia langa care sunt nu este predispusa unui gnak, ce pot sa fac? Ma duc in baza si incep din nou ruta din jungla?  </h4>
                            {{-- <small class="text-warning">{{$post->created_at}} by {{$post->user->name}}</small> --}}
                    
                
                    </div>  
                </div>
                <br>
                
                
            </div>
            <div class="card-footer">
            <div class="row">
                <div class="container">
                    <div class="form-group text-warning" id="csz">
                        {{Form::label('body','Ofera o recenzie')}}
                        {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'Feedback'])}}
                    </div>
                </div>
                
            </div>  
            <div class="row justify-content-center">
                <a href="/" class="btn btn-warning">Ofera Recenzie</a>
            </div>
        </div>
        </div>  
</div>
</div>
<br>


@endsection
