<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Vendor;

class CategoryController extends Controller

{
    public function new(){
      return view('category', ['products' => Product::paginate(9)]);
    }

    public function category($category){
      $product = Vendor::where('category',$category)->paginate(9);
      return view('category',compact('products'));
    }

    public function singleProduct($id){
      return view('single', ['products' => Product::find($id)]);
    }

    public function orderProduct(Request $request, $id){
      $data['orderForm'] = $request->all();
      return view('order', ['products' => Product::find($id)], $data);
    }
}
