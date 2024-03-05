@extends('layouts.app')

@section('page-title', 'Comics Create')

@section('main-content')
 <h1 class="text-center">Comics Create</h1>
    <div class="col">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       <form action="{{route('comics.store')}}" method="POST">
        @csrf
            <div class="mb-3">
               <label for="src" class="form-label">SRC:</label>
               <input type="text" class="form-control @error('src') is-invalid @enderror" id="src" name="src" placeholder="Inserisci la SRC..." value="{{ old('src') }}">
                 @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
               <label for="title" class="form-label">Titolo: <span class="text-danger">*</span> </label>
               <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="Inserisci il titolo..." required value="{{ old('title') }}" >
                 @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione: <span class="text-danger">*</span> </label>
                <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3" placeholder="Inserisci la descrizione..." maxlength="150" required>{{ old('description') }}"</textarea>
                  @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo: <span class="text-danger">*</span> </label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" placeholder="Inserisci il prezzo..." required value="{{ old('price') }}">
                  @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <div class="mb-3">
                <label for="series" class="form-label">Serie:</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" placeholder="Inserisci la serie..."  maxlength="50" value="{{ old('series') }}">
                  @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di vendita:</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" placeholder="Inserisci la data di vendita..." value="{{ old('sale_date') }}">
                  @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <div class="mb-3">
                <label for="type" class="form-label">Tipo:</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" placeholder="Inserisci il tipo..."  maxlength="50" value="{{ old('type') }}" >
                  @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <div class="mb-3">
                <label for="artists" class="form-label">Artista/i: <span class="text-danger">*</span> </label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" id="artists" name="artists" placeholder="Inserisci Artista/i..."  maxlength="500" required value="{{ old('srtists') }}">
                  @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
              <div class="mb-3">
                <label for="writers" class="form-label">Scrittore/i: <span class="text-danger">*</span> </label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" id="writers" name="writers" placeholder="Inserisci Scrittore/i..." maxlength="500" required value="{{ old('writers') }}">
                  @error('src')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div>
               <button type="submit" class="btn btn-primary mb-3 w-100"> Aggiungi </button>
            </div>
        </form>
    </div>
@endsection
