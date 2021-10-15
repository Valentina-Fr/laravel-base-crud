@if($comic->exists)
<form method="POST" action="{{ route('comics.update', $comic) }}" class="m-5" novalidate>
    @method('patch')
@else 
<form method="POST" action="{{ route('comics.store') }}" class="m-5" novalidate>
@endif
    @csrf
  <div class="mb-3">
    <label for="title" class="form-label">Title</label>
    <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <textarea rows="5" class="form-control" id="description" name="description">{{ $comic->description }}</textarea>
  </div>
  <div class="mb-3">
    <label for="thumb" class="form-label">Thumb</label>
    <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Price</label>
    <input type="number" class="form-control" id="price" step=".01" name="price" value="{{ $comic->price }}">
  </div>
  <div class="mb-3">
    <label for="series" class="form-label">Series</label>
    <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
  </div>
  <div class="mb-3">
    <label for="sale-date" class="form-label">Sale Date</label>
    <input type="date" class="form-control" id="sale-date" name="sale_date" value="{{ $comic->sale_date }}">
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Type</label>
    <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>