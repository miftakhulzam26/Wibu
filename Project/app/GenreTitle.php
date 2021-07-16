<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenreTitle extends Model
{
    //
    public $timestamps = false;
    protected $table = 'genre_title' ;
    //protected $primaryKey = 'id';
    protected $fillable = [
        'title_id',
        'genre_id',
    ];
}
