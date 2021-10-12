@extends('layouts.main')
@section('title', 'Comics')
@section('content')
    <div class="jumbo-border"></div>
    <div id="comics" class="container row justify-center">
        <img class="comics-img" src="{{ $show['thumb'] }}" alt="{{ $show['title'] }}">
        <div class="col-8">    
            <h3>{{ $show['title'] }}</h3>
            <div class="info-banner row justify-between">
                <div>
                    <span class="font-green-light">US PRICE: </span><span>{{ $show['price'] }}</span>
                </div>
                <div>
                    <span class="font-green-light px-1">AVAILABLE</span>
                    <span class="px-1">Check availability</span>
                </div>
            </div>
            <p>{{ $show['description'] }}</p>
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
                <div class="row">
                    <h6 class="col-3">Art by:</h6>
                    <ul class="col-9">
                        @foreach($show['artists'] as $artist)
                            <li>{{ $artist }}</li>,
                            @if($loop->last)
                            <li>{{ $artist }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
                <div class="row">
                    <h6 class="col-3">Written by:</h6>
                    <ul class="col-9">
                        @foreach($show['writers'] as $writer)
                            <li>{{ $writer }}</li>,
                            @if($loop->last)
                            <li>{{ $writer }}</li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="specs col-6">
                <h4>Specs</h4>
                <div class="row">
                    <h6 class="col-3">Series:</h6>
                    <p class="col-9 font-dc">{{ $show['series']}}</p>
                </div>
                <div class="row">
                    <h6 class="col-3">Us Price:</h6>
                    <p class="col-9">{{ $show['price']}}</p>
                </div>
                <div class="row">
                    <h6 class="col-3">On Sale Date:</h6>
                    <p class="col-9">{{ $show['sale_date']}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
