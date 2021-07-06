@extends('layouts.app')

@section('content')

<div class=" row justify-content-center">
    <h1 id="csz" class="text-warning">Videoclipuri trimise pentru a primi o recenzie</h1>
</div>


    @if (count($vodreviews) > 0)
        @foreach ($vodreviews as $vodreview)
            @if ($vodreview->feedback == null )
            <div class="row">
                <div class="col-md-6 col-sm-6">
            
                    <div class="card bg-dark">
                            <div class="card-body">
                                <div class="well">
                                    <div class="row">
                                            <div class="embed-responsive embed-responsive-21by9">
                                                <iframe class="embed-responsive-item" src={{$vodreview->video}}></iframe>
                                            </div>
                                    </div>
                                    <br>
                                    <div>        
                                            
                                            <h4 id="csz" class="text-warning">{{$vodreview->body}} </h4>
                                    
                                
                                    </div>  
                                </div>
                                <br>
                                
                                
                                
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="container">
                                        {!! Form::open(['action'=> ['VodreviewsController@update', $vodreview->id], 'method' => 'POST']) !!}
                                        <div class="form-group text-warning" id="csz">
                                            {{Form::label('feedback','Ofera o recenzie')}}
                                            {{Form::textarea('feedback','',['class'=>'form-control','placeholder'=>'Feedback'])}}
                                        </div>
                                        <div class="row justify-content-center">
                                            {{Form::hidden('_method','PUT')}}
                                            {{Form::submit('Ofera Recenzie',['class'=>'btn btn-warning'])}}
                                        </div>
                                        {!! Form::close() !!}
                                    </div>
                                    
                                </div>  
                        </div>
                    </div>  
            </div>
            @endif
        @endforeach
            {{$vodreviews->links()}}
    @endif



@endsection
