@extends('layouts.app')

@section('page-title', 'Comics')

@section('main-content')
 <h1 class="text-center">Elenco dei Fumetti</h1>
     <div class="mb-4">
       <a href="{{route('comics.create')}}" class="btn btn-primary w-100 fs-5"> + Aggiungi</a>
     </div>
    <div class="row m-4">
        @foreach($comics as $comic)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" class="card-img-top" alt="{{ $comic['title'] }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title}}</h5>
                        <p class="card-text">{{ $comic->description}}</p>
                        <p class="card-text"><strong>Prezzo:</strong> {{ $comic->price}}</p>
                        <p class="card-text"><strong>Serie:</strong> {{ $comic->series}}</p>
                        <p class="card-text"><strong>Data di Vendita:</strong> {{ $comic->sale_date}}</p>
                        <p class="card-text"><strong>Tipo:</strong> {{ $comic->type}}</p>
                        <p class="card-text"><strong>Artista/i:</strong> {{ $comic->artists}}</p>
                        <p class="card-text"><strong>Scrittore/i:</strong> {{ $comic->writers}}</p>
                         <a href="{{route('comics.show',['comic' => $comic->id])}}" class="btn btn-primary">Go to Comic</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
