@extends('layouts.app')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Email Verify</th>
    </tr>
  </thead>
  <tbody>
  @foreach($users as $user)
    <tr>
        <th scope="row">{{$user->id}}</th>
        <th>{{$user->name}}</td>
        <th>{{$user->email}}</th>
        <th>{{$user->email_verified_at}}</th>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection
