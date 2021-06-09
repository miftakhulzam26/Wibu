<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'user_id';
    protected $fillable = [
        'user_name', 'user_email', 'user_username', 'user_desc',
    ];
    protected $hidden = [
        'user_password'
    ];
}
