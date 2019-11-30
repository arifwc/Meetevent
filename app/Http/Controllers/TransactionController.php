<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Vendor;
use App\Rent;
use App\Product;
use Carbon\Carbon;

class TransactionController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function nyewa()
    {
        $sewa = new Rent;
        $produk = new Product;
        $liatsewa = $sewa->where('product_id',request('product'))->get();
        $liatproduk = Product::where('id',request('product'))->first();
        $stock = $liatproduk->stock;
        foreach($liatsewa as $sewa){
            if($stock > request('amount')){
                return back()->withErrors(['msg', 'stok tidak cukup']);
            }
        }
        
        //$sewa->user_id = Auth::id();
        $sewa->user_id = 1;
        $sewa->product_id = request('product');
        $sewa->start_date = request('start_date');
        $sewa->end_date = request('end_date');
        $sewa->amount = request('amount');
        $sewa->total_price = $sewa->amount*$liatproduk->price;
        $sewa->save();
        return redirect()->route('product.order');
    }

    public function order()
    {
        $rent = Rent::where('user_id',Auth::id())->where('created_at','<',Carbon::now()->subHours(1))->latest()->first();
        return view('order',compact('rent'));
    }
    
    
}
