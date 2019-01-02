<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderData extends Model
{

    protected $fillable = [
        'tovari_id',
        'order_id',
        'total_price_z',
        'total_price_t'

    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $table = 'order_data';
}
