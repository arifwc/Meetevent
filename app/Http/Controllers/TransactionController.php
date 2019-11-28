<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendor;
use App\Rent;
use App\Product;

class TransactionController extends Controller
{
    public function lookVendor($vendor)
    {
        $list_produk = Product::where('vendor_id',$vendor)->get();
        
        return view('liatVendor',['list_produk'=>$list_produk]);
    }
    public function checkout()
    {
        // iki sabari cekavail
    }

    
    public function checkAvailibility(Request $request)
    {
        
    }

    public function addToCart()
    {
        // gakusah dipikir sek
    }
}
