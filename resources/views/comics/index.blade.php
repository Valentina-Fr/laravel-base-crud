@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div id="content">
    <div class="container">
        <div class="btn dc-background text-white current-series">CURRENT SERIES</div>
        <div class="ms-row">
            @foreach($comics as $comic)
                <figure id="card">
                    <a href=" {{ route('comics.show', $comic->id) }} ">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"> 
                        <figcaption>{{ $comic->title }}</figcaption>
                        <form method="POST" action="{{ route('comics.destroy', $comic->id) }}">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </a>
                </figure>
            @endforeach
        </div>
    </div>
    <div class="container d-flex justify-content-center">
        <a href="{{ route('comics.create') }}" class="btn dc-background text-white pointer">Add Comics</a>
    </div>
@endsection
