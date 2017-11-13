@extends('layouts.app')

@section('content')
You are logged in!
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <figure class="thumb">

                      <div class="cover">
                        <img src="http://www.creativindie.com/wp-content/uploads/2013/10/Enchantment-Book-Cover-Best-Seller1.jpg" />
                      </div>

                      <h2>Enchantment</h2>
                      <p class="author">by Guy Kawasaki</p>
                    </figure>

                    <figure class="thumb">
                      <div class="cover">
                        <img src="http://yourdesk.files.wordpress.com/2010/11/city-cover-medium-quality-766x1024.jpg" />
                      </div>

                      <h2>CITY</h2>
                      <p class="author">by P.D.Smith</p>
                    </figure>

                    <figure class="thumb">
                      <div class="cover">
                        <img src="http://blogs.ivpress.com/img/bb_just_courage_2.jpg" />
                      </div>
                      <h2>Just Courage</h2>
                      <p class="author">by Gary A.Haugen</p>
                    </figure>
                    @foreach($books as $book)
                    <figure class="thumb">
                      <div class="cover">
                        <img src="" />
                      </div>
                      <h2>{{$book -> title }}</h2>
                      <p class="author">{{$book -> author }}</p>
                      <p>{{ $book -> my_rating }}</p>
                      <p>{{$book -> my_review }}</p>
                    </figure>
                    @endforeach
                    <div class="create">
                        <button class="create_author"><a href="/create_author"> Create new author</a></button>
                        <button class="create_book"><a href="/new_book">Create new book</a> </button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<button><a href="/authors">See all authors</a></button>
@endsection
