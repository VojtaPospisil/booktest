@extends('layouts.app')

@section('content')

<div    class="new_author">
    <form action="#" method="POST">
    {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="validationServer01">Author name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" placeholder="author_name" name="author_name"value="" required>
            </div>
            <div class="col-md-6 mb-3">
                <label for="validationServer02">Date of birth</label>
                 <input type="date" class="form-control is-valid" id="validationServer02" placeholder="date_of_birth"name="date_of_birth" value="Year of birth" required>
             </div>
        </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
</div>
<div>
    <button><a href="/home">See all books</a></button>
    <button><a href="/authors">See all authors</a></button>
</div>


@endsection
