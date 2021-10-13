@extends('layouts.main')
@section('title', 'Add comics')
@section('content')
<form action="POST" method="{{ route('comics.store') }}" class="m-5">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label" name="description">Description</label>
    <textarea class="form-control" id="description"></textarea>
  </div>
  <div class="mb-3">
    <label for="thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" id="thumb" name="thumb">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" name="price">
  </div>
  <div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" id="series" name="series">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" id="type" name="type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection