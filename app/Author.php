<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Author extends Model
{
     /*public $table = 'Author';
     protected $guarded = 'id';

public function user() {
     return $this->belongsTo('User::class', 'user_id');
     }

     public function author() {
     return $this->hasMany('Book::class', 'user_id');
} */
};
