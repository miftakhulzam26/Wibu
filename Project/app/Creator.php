<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Creator extends Model
{
    //
    protected $table = 'creator';
    //protected $primaryKey = 'creator_id';
    protected $fillable = [
        'creator_name',
        'creator_email',
        'creator_password',
        'creator_desc',
    ];
    public function ltitle()
    {
        return $this->hasMany('App\Title');
    }

    public function review()
    {
        belongsTo('App\Review');
    }
}
