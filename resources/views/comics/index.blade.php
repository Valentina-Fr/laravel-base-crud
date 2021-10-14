@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div id="content">
    <div class="container">
        @if(session('alert'))
        <div class="alert alert-warning mt-3" role="alert">
            {{session('alert')}} successfully deleted!
        </div>
        @endif
        <div class="btn dc-background text-white current-series">CURRENT SERIES</div>
        <div class="ms-row">
            @foreach($comics as $comic)
                <figure id="card">
                    <a href=" {{ route('comics.show', $comic->id) }} ">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"> 
                        <figcaption>{{ $comic->title }}</figcaption>
                    </a>
                    <form method="POST" action="{{ route('comics.destroy', $comic->id) }}" class="mt-auto delete-form" data-name="{{$comic->title}}">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </figure>
            @endforeach
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <a href="{{ route('comics.create') }}" class="btn dc-background text-white pointer">Add Comics</a>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('js/confirm.js') }}"></script>
@endsection
