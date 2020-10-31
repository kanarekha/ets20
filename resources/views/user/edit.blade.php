@extends('dashboard')

@section('title', 'edit')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-2">Form Edit Data User</h1>
          @if (session('status'))
              <div class="alert alert-success">
                  {{ session('status') }}
              </div>
          @endif

          <form method="post" action="/{{ $user->user_id }}">
            @method('patch')
            @csrf
            <div class="form-group">
              <label for="nama">name</label>
              <input type="text" class="form-control @error('name_user') is-invalid @enderror" id="name_user" placeholder="Input Name" name="name_user" value="{{ $user->name_user }}">
              @error('name_user')
              <div class="invalid-feedback">{{ $message }} </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nama">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Input email" name="email" value="{{ $user->email }}">
              @error('email')
              <div class="invalid-feedback">{{ $message }} </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="nama">Phone Number</label>
              <input type="text" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" placeholder="Input phone number" name="phone_number" value="{{ $user->phone_number }}">
              @error('phone_number')
              <div class="invalid-feedback">{{ $message }} </div>
              @enderror
            </div>
          <button type="submit" class="btn btn-primary">Ubah Data</button>
          </form>
      

      </div>
    </div>
  </div>
@endsection
    
