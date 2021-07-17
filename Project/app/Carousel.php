<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    //
    protected $table = 'carousel';
    //migratprotected $primaryKey = 'id';
    protected $fillable = [
        'image',
        'title',
        'text',
        'link'
    ];
}
