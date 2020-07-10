<?php

namespace App;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

class Product extends Eloquent 
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'products';

    protected $fillable = [
        'Name', 'description', 'ID_type', 'unit_price', 'promotion_price', 'image'
    ];

}
