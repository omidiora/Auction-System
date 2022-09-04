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

        if (Auth::check()) {
            if (Auth::user()->user_type == "1") {

                return view('seller.profile', compact("users"));
            } else {

                return redirect()->back();
            };
        }
        return redirect("/login");
    }
    // 

    public function MyItem()
    {
        $products = DB::table('products')
            ->join('users', 'products.user_id', '=', 'users.id')->where("products.user_id", Auth::id())->get();




        return view('MyItem', compact('products'));
    }
}
