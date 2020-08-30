<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    protected $fillable = [
        'id_user', 'id_provider', 'name_provider'
    ];
}
