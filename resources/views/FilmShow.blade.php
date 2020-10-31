@extends('dashboard')

@section('content')
  <h2 style="text-align: center">DETAIL OF MOVIES</h2>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header h5" style="text-align: center">{{$hasil_film->title}}</h5>
                    <br>
                    @if (isset($hasil_film->poster))
                        <center>
                            <img src="{{ asset($hasil_film->poster)}}">
                        </center>
                        @else
                            <?php echo "Photo is not available"; ?>
                        @endif
                        <br>
                    <div class="card-body">
                        {{-- <center> --}}
                      <h5 class="card-title">Rating : {{$hasil_film->rating}}</h5>
                        
                      <h5 class="card-title">Year : {{$hasil_film->year}}</h5> 
                      <h5 class="card-title">Country : {{$hasil_film->country}}</h5> 
                      <h5 class="card-title">Directors : {{$hasil_film->directors}}</h5>  
                      <h5 class="card-title">Actors : {{$hasil_film->actors}}</h5>    
                      <h5 class="card-title">Duration : {{$hasil_film->duration}}</h5>  
                      <h5 class="card-title">Type : {{$hasil_film->type}}</h5>
                      <h5 class="card-title">Synopsis :</h5> 
                    {{-- </center>                    --}}
                      <p class="card-text">{{$hasil_film->synopsis}}</p>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection