<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function accessoires(){

        $produits = Produit::all() ;

        return view ("accessoires", compact ("produits")) ;
    }
}
