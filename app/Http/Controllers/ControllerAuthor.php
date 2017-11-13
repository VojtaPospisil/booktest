<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ControllerAuthor extends Controller
{

    public static function newAuthor() {
        return view('create_author');
    }


    public static function createAuthor() {
        $request = request();
        $author = new Author();
        $author -> name = $request['author_name'];
        $author -> year_of_birth = $request['date_of_birth'];
        $author->save();
        return redirect() -> route('authors');
    }

    public static function getAuthor() {
        $authors = Author::all();
        return view('authors', ['authors'=> $authors]);
    }

    public static function delAuthor($id) {
        $author = Author::where('id' , $id )->first();
        $author->delete();
        return redirect()->route('authors');
   }

    public function edit($id) {
        $author = Author::where('id' , $id )->first();
        return view('edit_author',['author'=>$author]);
    }

    public function editAuthor(Request $request,$id) {
        //$request = request();
        $author = Author::where('id', $id )->first();
        $author->name = $request['name'];
        $author->year_of_birth = $request['date'];
        $author->save();
        return redirect() -> route('authors');
    }

}
