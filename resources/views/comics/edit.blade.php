@extends('layouts.app')

@section('page-title', $comic->title.'Edit')

@section('main-content')
 <h1 class="text-center">{{$comic->title}} Edit</h1>
    <div class="col">
       <form action="{{route('comics.update', ['comic'=> $comic->id])}}" method="POST">
        @csrf
        @method('PUT')
            <div class="mb-3">
               <label for="src" class="form-label">SRC:</label>
               <input value="{{$comic->src}}" type="text" class="form-control" id="src" name="src" placeholder="Inserisci la SRC..." >
            </div>
            <div class="mb-3">
               <label for="title" class="form-label">Titolo: <span class="text-danger">*</span> </label>
               <input value="{{$comic->title}}" type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo..." required >
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione: <span class="text-danger">*</span> </label>
                <textarea class="form-control" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." maxlength="150" required> {{$comic->description}} </textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo: <span class="text-danger">*</span> </label>
                <input value="{{$comic->price}}" type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo..." required>
            </div>
              <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input value="{{$comic->series}}" type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie..."  maxlength="50" >
            </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita:</label>
                <input value="{{$comic->sale_date}}" type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di vendita...">
            </div>
              <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <input value="{{$comic->type}}" type="text" class="form-control" id="type" name="type" placeholder="Inserisci il tipo..."  maxlength="50" >
            </div>
              <div class="mb-3">
                <label for="artists" class="form-label">Artista/i: <span class="text-danger">*</span> </label>
                <input value="{{$comic->artists}}" type="text" class="form-control" id="artists" name="artists" placeholder="Inserisci Artista/i..."  maxlength="500" required>
            </div>
              <div class="mb-3">
                <label for="writers" class="form-label">Scrittore/i: <span class="text-danger">*</span> </label>
                <input value="{{$comic->writers}}" type="text" class="form-control" id="writers" name="writers" placeholder="Inserisci Scrittore/i..." maxlength="500" required>
            </div>
            <div>
               <button type="submit" class="btn btn-warning mb-3 w-100"> Modifica </button>
            </div>
        </form>
    </div>
@endsection
