
@extends('dashboard')

@section('content')
<link rel="stylesheet" href="../../public/assets/css/style.css">
<br>
    <h2 style="text-align: center">LIST OF MOVIES</h2>
    <br>
    @include('form_pencarian')
    <br>
    @include('flash.flash_message')
    <br>
    
        <br> <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (!empty($list_film))
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Title</th>
                                    <th>Poster</th>
                                    <th>Year</th>
                                    <th>Country</th>
                                    <th>Rating</th>
                                    <th>Type</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1 ?>
                                @foreach ($list_film as $film)
                                    <tr>
                                        <td> {{$no}}</td>
                                        <td> {{$film->title}}</td>
                                        <td>
                                            @if (isset($film->poster))
                                                <img src="{{ asset($film->poster)}}">
                                            @else
                                                <?php echo "Photo is not available"; ?>
                                            @endif
                                        </td>
                                        <td> {{$film->year}}</td>
                                        <td> {{$film->country}}</td>
                                        <td> {{$film->rating}}</td>
                                        <td> {{$film->type}}</td>
                                        <td> <a href="{{ url('detail/' . $film->film_id) }}" class="btn btn-success btn-sm" role="button">Detail</a>
                                             <a href="{{ url('review/' . $film->film_id) }}" class="btn btn-success btn-sm" role="button">Review</a>
                                        </td>
            
                                        
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No data of film</p>
                    @endif
                    <hr>
                    <div class="table-nav ">
                        <div class="jumlah-data">
                            <strong> Total of Film : {{$jumlah_film}}</strong>
                        </div>
                        <div class="paging" style="align-content: center">
                            {{$list_film->links()}}
                        </div>
                    </div>
                    <p align="right">
                        <a href="movies/create" class="btn btn-primary">Add Movies</a>
                    </p>
                </div>
            </div>
        </div>
@endsection