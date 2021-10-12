@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div id="content">
    <div class="container">
        <div class="btn dc-background font-white">CURRENT SERIES</div>
        <div class="row">
            @foreach($comics as $comic)
                <figure id="card">
                    <a href=" {{ route('comics.show', $comic->id) }} ">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}"> 
                        <figcaption>{{ $comic->title }}</figcaption>
                    </a>
                </figure>
            @endforeach
        </div>
      </div>
  </div>
@endsection
