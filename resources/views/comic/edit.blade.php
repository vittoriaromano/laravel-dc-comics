@extends('layout.app')

@section('page.title')
<div class="container">
  Modifica pasta: {{ $comic->title }}
</div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Torna all'elenco</a>
    </div>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}">
        </div>  
        <div class="mb-3">
            <label for="description" class="form-label">description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $comic->description }}">
        </div>  
        <div class="mb-3">
          <label for="thumb" class="form-label">Image</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">price</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ $comic->price }}">
        </div>  
        <div class="mb-3">
            <label for="series" class="form-label">series</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}">
        </div>  
        <div class="mb-3">
            <label for="sale_date" class="form-label">sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>  
        <div class="mb-3">
            <label for="type" class="form-label">type</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}">
        </div>  
        <div class="mb-3">
            <label for="artists" class="form-label">artists</label>
            <input type="text" class="form-control" id="artists" name="artists" value="{{ $comic->artists }}">
        </div>  
        <div class="mb-3">
            <label for="writers" class="form-label">writers</label>
            <input type="text" class="form-control" id="writers" name="writers" value="{{ $comic->writers }}">
        </div>  

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>




</div>

@endsection