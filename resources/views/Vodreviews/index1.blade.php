@extends('layouts.app')

@section('content')

<div class=" row justify-content-center">
    <h1 id="csz" class="text-warning">Recenziile video la care ai primit rapuns:</h1>
</div>
<br>
<br>
<div class="row">
    @if (count($vodreviews) > 0)
        @foreach ($vodreviews as $vodreview)
            @if ($vodreview->user_id == auth()->user()->id && $vodreview->feedback != null )
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
                                        <h4 id="csz" class="text-warning"> {{$vodreview->body}} </h4>
                                </div>  
                            </div>
                            <br>
                            
                            
                            
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="container">
                                    <h4 id="csz" class="text-warning"> <b>RASPUNS:</b> <br><br> {{$vodreview->feedback}} </h4>
                                </div>
                        </div>  
                    </div>
                    </div>  
                </div>  
                <br>
                <br>
            @endif
        @endforeach
            {{$vodreviews->links()}}
    @else
        <p class="text-warning">Nu exista nicio recenzie primita</p>
    @endif
</div>
<br>
<br>
<div class="row justify-content-center">
    <a href="/vodreviews/create" class="btn btn-primary align-content-center">Cere o recenzie</a>
</div>


@endsection