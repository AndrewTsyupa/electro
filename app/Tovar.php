<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tovar extends Model
{
    protected $fillable =
        [
            'tovar_name',
            'opis',
            'price',
            'image',
        ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    protected $casts = [
        'image' => 'array'
    ];
    protected $table = 'tovari';

    public function productData()
    {
        return $this->table;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMainImage()
    {
        if ($this->image) {
            return '/images/tovar/' . $this->id .'/'. $this->image[0];
        } else {
            return '/images/tovar/default.jpg';
        }
    }

    public function values()
    {
        return $this->hasMany('App\Values', 'tovari_id')->orderBy('id', 'asc');
    }


}
