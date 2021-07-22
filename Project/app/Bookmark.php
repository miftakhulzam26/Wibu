<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bookmark extends Model
{
    //
    protected $table = 'bookmark';
    //migratprotected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'title_id',
        ];
}
