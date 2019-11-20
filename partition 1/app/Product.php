<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Product extends Model
{
    public function panier() {
        return $this->belongsToMany('App\model\panier');
    }
}