@extends('dashboard')

@section('content')
    <br>
    <h2 style="text-align: center">ADD MOVIES</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('movies/save')}}" method="post">
                    @csrf
                    <div class=" form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="The Title of Movies">
                    </div>
                    <div class=" form-group">
                        <label for="year" class="control-label">Year</label>
                        <input type="text" name="year" class="form-control" placeholder="The Year of Movies">
                    </div>
                    <div class=" form-group">
                        <label for="synopsis" class="control-label">Synopsis</label>
                        <textarea name="synopsis" maxlength="1000" placeholder="Brief Synopsis" class="form-control"></textarea>
                    </div>
                    <div class=" form-group">
                        <label for="country" class="control-label">Country</label>
                        <input type="text" name="country" class="form-control" placeholder="The Country of Movies">
                    </div>
                    <div class=" form-group">
                        <label for="directors" class="control-label">Directors</label>
                        <input type="text" name="directors" class="form-control" placeholder="The Directors of Movies">
                    </div>
                    <div class=" form-group">
                        <label for="actors" class="control-label">Actors</label>
                        <input type="text" name="actors" class="form-control" placeholder="The Actors of Movies">
                    </div>
                    <div class=" form-group">
                        <label for="rating" class="control-label">Rating ( 1-10 )</label>
                        <input type="text" name="rating" class="form-control" placeholder="The Rating of Movies">
                    </div>
                    <div class=" form-group">
                        <label for="Duration" class="control-label">Duration (minutes)</label>
                        <input type="text" name="duration" class="form-control" placeholder="The Duration of Movies">
                    </div>
                    <div class=" form-group">
                        <label for="type" class="control-label">Type</label>
                        <input type="text" name="type" class="form-control" placeholder="movie/series">
                    </div>
                    {{-- <div class="input-group-btn"> --}}
                        <button type="submit" class="btn btn-success btn-sm">Save</button>
                        <button type="reset" class="btn btn-danger btn-sm">Reset</button>
                    {{-- </div> --}}

                </form>
            </div>
        </div>
    </div>
@endsection