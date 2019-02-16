<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'name',
        'url',
        'content',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $table = 'page';

}
