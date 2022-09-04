<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

class WinningController extends Controller
{
    //

    public function Index()
    {
        // $MAX_PRICE = DB::table('buyers')->where('product_id', '=', $id)->max('price');
        $products =DB::table('buyers')->where('product_id', '=', 1)->max('price');
        // dd($products);

        $products = DB::table('products')
            ->join('buyers', 'products.id', '=', 'buyers.product_id')
            ->where('products.ended_bid', '=', 0)->where('products.ended_bid', '=', 0)->with('id')->max("price");
          
        //     ->get();
        // ->orderBy('personal_best', 'desc')
      






        return view('WinningBid.win', compact('products'));
    }
}
