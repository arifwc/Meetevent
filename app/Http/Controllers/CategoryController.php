<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class CategoryController extends Controller

{
    public function new(){
      return view('category', ['products' => Product::paginate(9)]);
    }

    public function singleProduct($id){
      return view('single', ['products' => Product::find($id)]);
    }
}
