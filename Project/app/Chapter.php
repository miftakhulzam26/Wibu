<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    //
    protected $table = 'chapter';
    //migratprotected $primaryKey = 'id';
    protected $fillable = [
        'chapter_title',
        'chapter_text',
        'view',
        'title_id'
    ];

    public function lchapter()
    {
        return $this->belongsTo('App\Title');
    }

    public function lcomment()
    {
        return $this->hasMany('App\Comment');
    }
}
