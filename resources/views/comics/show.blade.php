@extends('layouts.main')
@section('title', 'Comics')
@section('content')
    <div class="jumbo-border">
        <img class="comics-img" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
    </div>
    <div id="comics" class="container ms-row justify-content-center">
        <div class="col-8">    
            <h3>{{ $comic->title }}</h3>
            <div class="info-banner ms-row justify-content-between">
                <div>
                    <span class="font-green-light">US PRICE: </span><span>{{ $comic->price }}</span>
                </div>
                <div>
                    <span class="font-green-light pe-1">AVAILABLE</span>
                    <span class="border-black ps-1">Check availability</span>
                </div>
            </div>
            <p>{{ $comic->description }}</p>
        </div>
        <figure class="col-4">
            <figcaption>ADVERTISEMENT</figcaption>
            <img src="{{asset('images/adv.jpg')}}" alt="adv">
        </figure>
    </div>
    <section class="comics-info">
        <div class="container ms-row">
            <div class="talent col-6">
                <h4>Talent</h4>
                <div class="row align-items-center">
                    <h6 class="col-5">Art by:</h6>
                </div>
                <div class="row align-items-center">
                    <h6 class="col-5">Written by:</h6>
                </div>
            </div>
            <div class="specs col-6">
                <h4>Specs</h4>
                <div class="row align-items-center">
                    <div class="col-5"><h6>Series:</h6></div>
                    <div class="col-7 font-dc small-text">{{ $comic->series }}</div>
                </div>
                <div class="row align-items-center">
                    <div class="col-5"><h6>Us Price:</h6></div>
                    <div class="col-7 small-text">{{ $comic->price }}</div>
                </div>
                <div class="row align-items-center">
                    <div class="col-5"><h6>On Sale Date:</h6></div>
                    <div class="col-7 small-text">{{ $comic->sale_date }}</div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center py-3">
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn dc-background text-white pointer me-2">Update</a>
            <form method="POST" action="{{ route('comics.destroy', $comic->id) }}" class="ms-2 delete-form" data-name="{{$comic->title}}">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{ asset('js/confirm.js') }}"></script>
@endsection
