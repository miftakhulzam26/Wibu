<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    //

    protected $table = "title";
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'cover',
        'sinopsis',
        'favorit',
        'creator_id',
    ];

    // public function ltitle()
    // {
    //     return $this->belongsTo('App\Creator');
    // }

    // public function lchapter()
    // {
    //     return $this->hasMany('App\Chapter');
    // }

    public function genre()
    {
        return $this->belongsToMany('App\Genre');
    }

    public function tag()
    {
        return $this->belongsToMany('App\Tag');
    }

    // public function lreview()
    // {
    //     return $this->hasMany('App\Review');
    // }


}
