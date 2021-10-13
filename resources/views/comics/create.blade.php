@extends('layouts.main')
@section('title', 'Add comics')
@section('content')
<form method="POST" action="{{ route('comics.store') }}" class="m-5">
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>
  <div class="mb-3">
    <label for="thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" id="thumb" name="thumb">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" step=".01" name="price">
  </div>
  <div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" id="series" name="series">
  </div>
  <div class="mb-3">
    <label for="sale-date" class="form-label">Sale date</label>
    <input type="date" class="form-control" id="sale-date" name="sale_date">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" id="type" name="type">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection