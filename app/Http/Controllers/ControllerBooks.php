<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ControllerBooks extends Controller
{
     public static function newBook() {
          $request = request();
          $book = new Book;
          $book -> title = $request['title'];
          $book -> published_at = $request['published'];
          $book -> finished_reading_at = $request['finish_reading'];
          $book -> my_review = $request['review'];
          $book -> my_rating = $request['inlineRadioOptions'];
          $book -> img_url = $request['img_url'];
          $book->save();
          return redirect()->action('ControllerBooks@showBooks');
     }

     public static function getBooks()  {
               return view('create_book');
     }

     public static function showBooks() {
          $books = Book::all();
          return view('home', ['books'=> $books]);
     }
}
