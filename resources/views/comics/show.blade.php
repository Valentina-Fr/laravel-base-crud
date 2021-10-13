@extends('layouts.main')
@section('title', 'Comics')
@section('content')
    <div class="jumbo-border"></div>
    <div id="comics" class="container ms-row justify-center">
        <img class="comics-img" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        <div class="col-8">    
            <h3>{{ $comic->title }}</h3>
            <div class="info-banner ms-row justify-between">
                <div>
                    <span class="font-green-light">US PRICE: </span><span>{{ $comic->price }}</span>
                </div>
                <div>
                    <span class="font-green-light px-1">AVAILABLE</span>
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
        <div class="container row">
            <div class="talent col-6">
                <h4>Talent</h4>
                <div class="ms-row">
                    <h6 class="col-3">Art by:</h6>
                </div>
                <div class="ms-row">
                    <h6 class="col-3">Written by:</h6>
                </div>
            </div>
            <div class="specs col-6">
                <h4>Specs</h4>
                <div class="ms-row">
                    <h6 class="col-3">Series:</h6>
                    <p class="col-9 font-dc">{{ $comic->series }}</p>
                </div>
                <div class="ms-row">
                    <h6 class="col-3">Us Price:</h6>
                    <p class="col-9">{{ $comic->price }}</p>
                </div>
                <div class="ms-row">
                    <h6 class="col-3">On Sale Date:</h6>
                    <p class="col-9">{{ $comic->sale_date }}</p>
                </div>
            </div>
            <a href="{{ route('comics.edit', $comic->id) }}">Update</a>
        </div>
    </section>
@endsection
