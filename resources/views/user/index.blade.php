@extends('dashboard')

@section('title', 'profile')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-10">
      <h1 class="mt-2">Daftar User</h1>
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
                    <a href="" class="badge badge-success">Edit</a>
                    <a href="" class="badge badge-danger">Delete</a>
                </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
  </div>
</div>
@endsection