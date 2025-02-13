<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //

    protected $table = "title";
    protected $primaryKey = 'title_id';
    protected $fillable = ['title_id','title_name','title_cover','title_sinopsis','user_id'];
}
