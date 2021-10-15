@extends('layouts.main')
@section('title', 'Trash')
@section('content')
<div id="content">
    <div class="container my-5">
        <div class="btn btn-success text-white current-series">TRASH</div>
        <div class="row gy-5">
            @forelse($comics as $comic)
            <div class="col-2">
                <figure id="card">
                    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}" class="img-fluid"> 
                    <figcaption>{{ $comic->title }}</figcaption>
                    <form method="POST" action="{{ route('comics.restore', $comic->id) }}" class="mt-auto delete-form" data-name="{{$comic->title}}">
                        @method('PATCH')
                        @csrf
                        <button type="submit" class="btn dc-background text-white">Restore</button>
                    </form>
                </figure>
            </div>
            @empty 
            <p>No comics in trash</p>
            @endforelse
        </div>
    </div>
@endsection