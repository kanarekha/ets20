@extends('dashboard')

@section('content')
<br> <br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 style="text-align: center">REVIEW OF {{$title_film->title}}</h2> <br>
            @if (count($review)>0)
            @foreach ($review as $r)
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">REVIEW</h5>
                            <small>{{$r->updated_at}}</small>
                        </div>
                            <p class="mb-1">
                                {{$r->review_film}}
                            </p>
                        <h5 class="mb-1">RATING</h5>
                            <p class="mb-1">
                                {{$r->rating_film}}
                            </p> <br>
                            <small>REVIEWED BY : {{$r->name_user}}</small>
                    </a>
                </div>
                @endforeach
            @else
            <h4 style="text-align: center">Review is Empty</h2> <br>
            @endif
            
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h5>ADD REVIEW OF {{$title_film->title}}</h2> <br>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="name">NAME USER</label>
                        <input type="text" class="form-control" name="nama" placeholder="input your name user">
                    </div>
                    <div class="form-group">
                        <label for="rating_film">RATING FILM</label>
                        <input type="text" class="form-control" name="rating_film" placeholder="rating of film">
                    </div>
                    <div class="form-group">
                        <label for="review_film">REVIEW FILM</label>
                        <textarea name="review_film" class="form-control" placeholder="your review" maxlength="200"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-md">Submit</button>
                        <button type="reset" class="btn btn-danger btn-md">Reset</button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection