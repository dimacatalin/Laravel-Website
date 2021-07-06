@extends('layouts.app')

@section('content')



<div class=" row justify-content-center">
    
    <h1 id="csz" class="text-warning">Recenziile video la care ai primit rapuns:</h1>
</div>
    
    <br><br>
    {{-- <hr class="bg-warning"> --}}
    
    <div class="row">
        <div class="col-md-6 col-sm-6">
    
                <div class="card bg-dark">
                    <div class="card-body">
                        <div class="well">
                            <div class="row">
                                    <div class="embed-responsive embed-responsive-21by9">
                                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/HKAXF6hLUj4"></iframe>
                                    </div>
                            </div>
                            <br>
                            <div>        
                                    
                                    <h4 id="csz" class="text-warning"> Salut! as avea o intrebare legata de momentul de la minutul 9:43. Ce trebuia s afac mai exact, sa imi ajut coechipierul sau sa fug? </h4>
                                    {{-- <small class="text-warning">{{$post->created_at}} by {{$post->user->name}}</small> --}}
                            
                        
                            </div>  
                        </div>
                        <br>
                        
                        
                        
                    </div>
                    <div class="card-footer">
                    <div class="row">
                        <div class="container">
                            <h4 id="csz" class="text-warning"> <b>RASPUNS:</b> <br><br> Salut! Dupa analiza mea facuta asupra meciului, in acel moment ai procedat corect sa fugi deoarece daca incercai sa il ajuti, exista posibilitatea (destul de mare) sa mori. Insa ce am observat la meciul acesta este faptul ca ai ramas foarte in urma cu numarul minionilor omorati, din aceasta cauza ati pierdut meciul, ai ramas in urma si nu ai mai putut sa tii pasul. Incarca sa te concentrezi asupra farm-ului si abia astept sa mai primesc un videoclip de la tine. Cu drag, Catalin. </h4>
                        </div>
                        
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
                                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tQRZ1txfVKs"></iframe>
                                </div>
                        </div>
                        <br>
                        <div>        
                                
                                <h4 id="csz" class="text-warning"> Salut! nu inteleg de ce am pierdut acest meci, dupa parerea mea, meciul decurgea bine in favoarea noastra insa de la un punct au inceput sa isi revina, imi poti spune care este explicatia?</h4>
                                {{-- <small class="text-warning">{{$post->created_at}} by {{$post->user->name}}</small> --}}
                        
                    
                        </div>  
                    </div>
                    <br>
                    
                    
                </div>
                <div class="card-footer">
                <div class="row">
                    <div class="container">
                        <h4 id="csz" class="text-warning"> <b>RASPUNS:</b> <br><br> Salut! Dupa analiza mea facuta asupra meciului, problema mare pe care ati intampinat-o este faptul ca adversarii aveau campioni cu o performanta mai buna pe masura ce meciul avanseaza. Greseala voastra dupa parearea mea este ca nu ati terminat meciul mai devreme, mai exact in jur de minutul 20, data viitoare vorbeste cu coechipierii sa incheiati emciul cat mai rapid. Cu drag, Catalin. </h4>
                    </div>
                    
                </div>  
            </div>
            </div>  
    </div>
    </div>
    <br>
    
    
    <br>
    
    <br>
    <div class="row justify-content-center">
        <a href="/" class="btn btn-primary">Cere recenzie la un videoclip</a>
    </div>





@endsection