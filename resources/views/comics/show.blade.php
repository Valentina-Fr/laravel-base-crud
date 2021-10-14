@extends('layouts.main')
@section('title', 'Comics')
@section('content')
    <div class="jumbo-border"></div>
    <div id="comics" class="container ms-row justify-content-center">
        <img class="comics-img" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="col-8">    
            <h3>{{ $comic->title }}</h3>
            <div class="info-banner ms-row justify-content-between">
                <div>
                    <span class="font-green-light">US PRICE: </span><span>{{ $comic->price }}</span>
                </div>
                <div>
                    <span class="font-green-light">AVAILABLE</span>
                    <span class="px-1">Check availability</span>
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
                    <h6 class="col-3">Art by:</h6>
                </div>
                <div class="row align-items-center">
                    <h6 class="col-3">Written by:</h6>
                </div>
            </div>
            <div class="specs col-6">
                <h4>Specs</h4>
                <div class="row align-items-center">
                    <div class="col-3"><h6>Series:</h6></div>
                    <div class="col-9 font-dc small-text">{{ $comic->series }}</div>
                </div>
                <div class="row align-items-center">
                    <div class="col-3"><h6>Us Price:</h6></div>
                    <div class="col-9 small-text">{{ $comic->price }}</div>
                </div>
                <div class="row align-items-center">
                    <div class="col-3"><h6>On Sale Date:</h6></div>
                    <div class="col-9 small-text">{{ $comic->sale_date }}</div>
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center py-3">
            <a href="{{ route('comics.edit', $comic->id) }}" class="btn dc-background text-white pointer">Update</a>
        </div>
    </section>
@endsection
