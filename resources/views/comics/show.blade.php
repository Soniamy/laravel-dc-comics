@extends('layouts.app')

@section('page-title', $comic->title)

@section('main-content')
 <h1 class="text-center">{{$comic->title}}</h1>

    <div class="row justify-content-center m-3">
        <div class="col-4">
            <div class="card ">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title}}</h5>
                        <p class="card-text">{{ $comic->description}}</p>
                        <p class="card-text"><strong>Prezzo:</strong> {{ $comic->price}}</p>
                        <p class="card-text"><strong>Serie:</strong> {{ $comic->series}}</p>
                        <p class="card-text"><strong>Data di Vendita:</strong> {{ $comic->sale_date}}</p>
                        <p class="card-text"><strong>Type:</strong> {{ $comic->type}}</p>
                        <p class="card-text"><strong>Artista/i:</strong> {{ $comic->artists}}</p>
                        <p class="card-text"><strong>Scrittore/i:</strong> {{ $comic->writers}}</p>
                    </div>
            </div>
           
        </div>
       
    </div>
@endsection
