@extends('layouts.app')

@section('content')
<div class="row">
     @foreach($authors as $author)
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Name of Author: <br> {{ $author -> name }}</h4>
        <p class="card-text">Date of birth: <br> {{ $author -> year_of_birth }}</p>
        <a href="/delete/{{ $author -> id }}" class="btn btn-primary">Delete</a>
       <a href="/edit/{{ $author -> id }}" class="btn btn-primary">Edit</a>
      </div>
    </div>
  </div>
  @endforeach
  </div>
        <a href="/create_author" class="btn btn-primary">Create new Author</a>
@endsection
