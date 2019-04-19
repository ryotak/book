<?php

namespace book;

use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    //
    protected $fillable = ['name','school_number','admission_year','department_id'];

    //belongsTo設定
    public function department()
    {
        return $this->belongsTo('book\Department');
    }
}
