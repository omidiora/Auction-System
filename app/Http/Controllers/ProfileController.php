<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    //
    public function index()
    {


        $users = Auth::user();

        if (Auth::user()->user_type == "1") {

            return view('seller.profile', compact("users"));
        } else {

            return redirect()->back();
        };
    }
    // 

    public function MyItem()
    {
        $products = DB::table('products')
            ->join('users', 'products.user_id', '=', 'users.id')->join('buyers', 'buyers.product_id', '=', 'products.id')->get();

       

        return view('MyItem', compact('products'));
    }
}
