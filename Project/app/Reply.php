<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    protected $fillable = [
        'comment_id',
        'creator_id',
        'content'
    ];

    protected function lreply()
    {
        return $this->belongsTo('App\Comment');
    }
}
