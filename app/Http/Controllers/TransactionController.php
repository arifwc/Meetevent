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

    public function nyewa(Request $request)
    {
        $sewa = new Rent;
        $produk = new Product;
        $liatsewa = $sewa->where('product_id',$request->input('product'))->get();
        $liatproduk = Product::where('id',$request->input('product'))->first();
        $stock = $liatproduk->stock;
        foreach($liatsewa as $sewa){
            if($stock > $request->input('amount')){
                return view('liatVendor',["error"=>"Pesanan anda tidak dapat dibuat karena stok tidak mencukupi#"]);
            }
        }
        
        // $sewa->user_id = Auth::id();
        $sewa->user_id = 1;
        $sewa->product_id = $request->input('product');
        $sewa->start_date = $request->input('start_date');
        $sewa->end_date = $request->input('end_date');
        $sewa->amount = $request->input('amount');
        $sewa->total_price = $sewa->amount*$liatproduk->price;
        $sewa->save();
        return redirect()->route('transfer');
    }

    public function transfer()
    {
        return view('transfer');
    }
    
    
}
