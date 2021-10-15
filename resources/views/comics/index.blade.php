@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div id="content">
    <div class="container my-5">
        @if(session('alert'))
        <div class="alert alert-warning my-3" role="alert">
            {{session('alert')}} successfully deleted!
        </div>
        @endif
        <div class="btn dc-background text-white current-series">CURRENT SERIES</div>
        <div class="row gy-5">
            @foreach($comics as $comic)
            <div class="col-2">
                <figure id="card">
                    <a href="{{ route('comics.show', $comic->id) }}">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid"> 
                        <figcaption>{{ $comic->title }}</figcaption>
                    </a>
                    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}" class="mt-auto delete-form" data-name="{{$comic->title}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </figure>
            </div>
            @endforeach
        </div>
    </div>
    <div class="container d-flex justify-content-center mb-4">
        <a href="{{ route('comics.create') }}" class="btn dc-background text-white pointer">Add Comics</a>
    </div>
    <div class="container d-flex justify-content-center mb-4">
        <a href="{{ route('comics.trash') }}" class="btn btn-success text-white pointer">Show Trash</a>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/confirm.js') }}"></script>
@endsection
