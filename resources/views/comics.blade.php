@extends('layouts.main')
@section('title', 'Comics')
@section('content')
<div id="content">
    <div class="container">
        <div class="btn dc-background font-white">CURRENT SERIES</div>
        <div class="row">
            @foreach($comics as $item)
                <figure id="card">
                    <a href="#">
                        <img src="{{$item['thumb']}}" alt="{{$item['title']}}"> 
                        <figcaption>{{ $item['title'] }}</figcaption>
                    </a>
                </figure>
            @endforeach
            <div class="btn dc-background font-white pointer">LOAD MORE</div>
        </div>
      </div>
  </div>
@endsection
