@extends('dashboard')

@section('content')
<br>
    <h2 style="text-align: center">LIST OF FILMS</h2>
        <br> <br>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @if (!empty($list_film))
                        <table class="table">
                            <thead>
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
                                        <td> <a href="#" class="btn btn-success btn-sm" role="button">Detail</a>
                                             <a href="#" class="btn btn-success btn-sm" role="button">Review</a>
                                        </td>
                                    </tr>
                                    <?php $no++; ?>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
            </div>
        </div>
@endsection