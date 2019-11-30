<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Vendor;

class CategoryController extends Controller

{
    public function new(){
      $vendors = Vendor::all();
      return view('category', compact('vendors'));
    }

    public function category($category){
      $vendors = Vendor::where('category',$category)->get();
      return view('category',compact('vendors'));

    }

    public function singleProduct($id){
      return view('single', ['products' => Product::find($id)]);
    }

    public function orderProduct(Request $request, $id){
      $data['orderForm'] = $request->all();
      return view('order', ['products' => Product::find($id)], $data);
    }
}
