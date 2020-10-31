@extends('dashboard')

@section('title', 'profile user')

@section('content')
<title>list user</title>
<div class="container">
  <div class="row">
      <div class="col-10">
      <h1 class="mt-2">Daftar User</h1>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
      <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $user as $u )
                <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $u->name_user }}</td>
                <td>{{ $u->email }}</td>
                <td>{{ $u->phone_number }}</td>
                <td>
                    <a href="{{ $u->user_id }}/edit " class="badge badge-success">Edit</a>
                    <form action="{{ $u->user_id }}" method="post">
                        @method('delete')
                        @csrf
                        <button type="submit" class="badge badge-danger">Delete</button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
  </div>
</div>
@endsection