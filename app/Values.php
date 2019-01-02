<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Values extends Model
{
    protected $fillable = [
        'name',
        'value',
        'tovari_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */



    protected $table = 'values';
}
