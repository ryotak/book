<?php

namespace book;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['name','author','company','publication_year','isbn']; 
}
