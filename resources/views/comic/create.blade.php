@extends('layout.app')

@section('page.title')
<div class="container">
  <h1 class="text-center">Add Your Comic</h1>
</div>
@endsection

@section('page.main')
<div class="container">
    <div>
        <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm m-3">Back to List</a>
    </div>
    <form action="{{ route('comics.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label d-none">title</label>
            <input type="text" class="form-control" id="title" name="title" value="Tilte">
        </div>  
        <div class="mb-3">
            <label for="description" class="form-label d-none">description</label>
            <input type="text" class="form-control" id="description" name="description" value="Description">
        </div>  
        <div class="mb-3">
          <label for="thumb" class="form-label d-none">Image</label>
          <input type="text" class="form-control" id="thumb" name="thumb" value="Image">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label d-none">price</label>
            <input type="text" class="form-control" id="price" name="price" value="Price">
        </div>  
        <div class="mb-3">
            <label for="series" class="form-label d-none">series</label>
            <input type="text" class="form-control" id="series" name="series" value="Series">
        </div>  
        <div class="mb-3">
            <label for="sale_date" class="form-label d-none">sale_date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="Date of Sail">
        </div>  
        <div class="mb-3">
            <label for="type" class="form-label d-none">type</label>
            <input type="text" class="form-control" id="type" name="type" value="Type">
        </div>  
        <div class="mb-3">
            <label for="artists" class="form-label d-none">artists</label>
            <input type="text" class="form-control" id="artists" name="artists" value="Artist">
        </div>  
        <div class="mb-3">
            <label for="writers" class="form-label d-none">writers</label>
            <input type="text" class="form-control" id="writers" name="writers" value="Writers">
        </div>  
        <button type="submit" class="btn btn-primary m-3">Submit</button>
    </form>
</div>

@endsection