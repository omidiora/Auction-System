<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{

    public function welcome()
    {

        $showThreeBookItem = DB::table('products')->where('products.category', '=', 3)->take(3)->get();
        $showJeweleryItem = DB::table('products')->where('products.category', '=', 6)->take(3)->get();
        $showThreeWatchItem = DB::table('products')->where('products.category', '=', 2)->take(3)->get();
        $showThreeShoeItem = DB::table('products')->where('products.category', '=', 4)->take(3)->get();



        return view('welcome', compact('showThreeBookItem', 'showJeweleryItem', 'showThreeWatchItem', "showThreeShoeItem"));
    }
}
