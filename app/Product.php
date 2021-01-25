<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name','code','colour','size','description','sale_price','stock', 'switch', 'id_models','image'];
}
