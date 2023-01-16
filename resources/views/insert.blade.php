@extends('layout.master')
@section('content')
<form action="/addAuthor" method="POST" class="border w-25" style="margin-left: 40%; margin-top: 10%">
    @csrf
    <legend align="center">Author Information</legend>
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control" placeholder="Username">
</div>
<div class="form-group ">
  <label for="pass">Password</label>
  <input type="password" class="form-control" name="password" id="pass">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
{{-- @if (@isset($author)@endisset)
    <h1>Data Inserted</h1>
@endif --}}
@endsection
