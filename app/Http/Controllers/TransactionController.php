<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Vendor;
use App\Rent;
use App\Product;

class TransactionController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function lookVendor($vendor)
    {
        $list_produk = Product::where('vendor_id',$vendor)->get();
        
        return view('liatVendor',compact('list_produk'));
    }

    public function nyewa(Request $request)
    {
        $sewa = new Rent;
        $produk = new Product;
        $liatsewa = $sewa->where('product_id',$request->input('product'))->get();
        $liatproduk = Product::where('id',$request->input('product'))->first();
        $stock = $liatproduk->stock;
        foreach($liatsewa as $sewa){
            if($stock > $request->input('amount')){
                return view('liatVendor',["error"=>"Pesanan anda tidak dapat dibuat karena stok tidak mencukupi"]);
            }
        }
        
        // $sewa->user_id = Auth::id();
        $sewa->user_id = 1;
        $sewa->product_id = $request->input('product');
        $sewa->rent_date = $request->input('rent_date');
        $sewa->amount = $request->input('amount');
        $sewa->total_price = $sewa->amount*$liatproduk->price;
        $sewa->save();
    }
    
    
}
