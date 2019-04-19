<?php

namespace book;

use Illuminate\Database\Eloquent\Model;

class ReadingRecord extends Model
{
    //
    protected $fillable = ['book_id','reader_id','year_read','month_read','report'];
    
    public function book(){ 
        return $this->belongsTo('book\Book'); 
    }
    
    public function reader(){ 
        return $this->belongsTo('book\Reader'); 
    } 
}
