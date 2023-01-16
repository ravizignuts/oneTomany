@extends('layout.master')
@section('content')
<form action="addpost" method="get" class="border w-50" style="margin-left: 20%; margin-top: 10%">
    @csrf
    <legend align="center">Add Post</legend>
    <div class="form-group">
      <label for="id">Author ID</label>
      <input type="text" name="id" id="id" class="form-control" value={{ $id }}>
      <small id="helpId" class="text-muted">Help text</small>
    </div>
<div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" id="title" class="form-control" placeholder="title">
</div>
<div class="form-group ">
  <label for="cat">Category</label>
  <input type="text" class="form-control" name="cat" id="cat">
</div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

@endsection
