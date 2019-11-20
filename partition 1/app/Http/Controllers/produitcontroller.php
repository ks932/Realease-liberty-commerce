<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class produitcontroller extends Controller
{
    public function index($id)
    {
        $product = Product::find($id);
 
        return view('produit', compact('product'));
    }
}
