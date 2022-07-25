<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function index(){
    
 
        $users= Auth::user();
    
        if(Auth::user()->user_type=="1"){

            return view('seller.profile', compact("users"));
        
        
        }
        else {
    
            return redirect()->back();
        
        };
    
    }
}
