@extends('layouts.app')

@section('content')

<form action="" method="POST">
{{ csrf_field() }}
    <input type="text" name="name" value="">
    <br>
    <input type="date" name="date">
    <br>
    <input type="submit" name="submit">
</form>

@endsection
