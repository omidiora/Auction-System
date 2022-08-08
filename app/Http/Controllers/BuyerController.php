<?php

namespace App\Http\Controllers;

use App\Models\BuyerProduct;
use App\Models\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class BuyerController extends Controller
{
    //

    public function SubmitBidFinally(Request $request)
    {
        if (Auth::check()) {
            $data = new Buyer;


            $request->validate([
                'price' => 'required',
                'product_id' => 'required',
                'product_id' => 'required',
            ]);

            $data->product_id = $request->product_id;
            $data->price = $request->price;
            $data->name = $request->name;
            $data->user_id = Auth::id();
            $data->save();
            // return rediret()->back();

            //     Product::create($input);
            return back()->with('success', 'Your bid is successfully!');
        }
    }
}
