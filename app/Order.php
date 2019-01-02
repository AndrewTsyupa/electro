<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'adress',
        'city',
        'postal_code',
        'countri'
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'order';
}
