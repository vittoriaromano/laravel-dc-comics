@extends('layout.app')

@section('page.title')
<div class="container p-3">
   {{ $comic->title }}
</div>
@endsection

@section('page.main')

<div class="container">
    <div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Back to List</a>
    </div>
    <div class="py-5">
        {!! $comic->description !!}
    </div>
</div>

@endsection