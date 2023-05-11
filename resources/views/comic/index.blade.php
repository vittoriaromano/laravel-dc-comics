@extends('layout.app')

@section('page.title')
<div class="container text-center p-3">
    COMICS
</div>
@endsection

@section('page.main')
<div class="container">
    <a href="{{ route('comics.create') }}" class="btn btn-success">Add Comic</a>
    @foreach ($comics as $comic)
    <div class="d-flex">
    <div class="card m-3" style="width: 18rem;" >
    <img class="card-img-top" src="{{ $comic->thumb }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{$comic->title }}</h5>
        <p class="card-text">{{ $comic->description }}</p>
    </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">{{ $comic->price }}</li>
            <li class="list-group-item">{{ $comic->sale_date }}</li>
            <li class="list-group-item">{{ $comic->series }}</li>
            <li class="list-group-item">{{ $comic->type }}</li>
            <li class="list-group-item">{{ $comic->artists }}</li>
            <li class="list-group-item">{{ $comic->writers }}</li>
        </ul>
        <div class="card-body d-flex">
            <a  href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm mx-1">Details</a>
            <a  href="{{ route('comics.edit', $comic->id) }}" class="btn btn-primary btn-sm mx-1">Modify</a>
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <input type="submit" value="Cancella" class="btn btn-danger btn-sm mx-1">
            </form>
        </div>
    </div>
</div>
    @endforeach
</div>

@endsection