<?php

namespace App\Http\Controllers;

use App\Models\BuyerProduct;
use App\Models\Buyer;
use App\Models\User;
use App\Notifications\SellerNotication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Notification;

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


            $userSchema = User::first();
            $offerData = [
                'name' => Auth::user()->name,
                'body' => Auth::user()->name .' '.'has bid bidded an amount of ' . $request->price,
                'thanks' => 'Thank you',
                'offerText' => 'Check out the offer',
                'offerUrl' => url('/'),
                'offer_id' => 007
            ];

            Notification::send($userSchema, new SellerNotication($offerData));

            // return rediret()->back();

            //     Product::create($input);
            return back()->with('success', 'Your bid is successfully!. Go to the dashboard');
        }
    }


    public function UpdateSubmitBidFinally(Request $request, $id)
    {
        if (Auth::check()) {
            $data = new Buyer;


            $request->validate([
                'price' => 'required',

            ]);

            $user = Buyer::where("user_id", Auth::id())->where('product_id', '=', $id)->update([
                "name" => $request->name,
                "surname" => $request->surname,
                "tel" => $request->tel,
                "country" => $request->country,
                "city" => $request->city,
                "region" => $request->region,
                "email_work" => $request->email
            ]);
            // return rediret()->back();

            //     Product::create($input);
            return back()->with('success', 'Your bid is successfully!. Go to the dashboard');
        }
    }





    public function MyBidItem()
    {


        $MyBids = Buyer::where([['user_id', '=', Auth::id()]])->first();
        return view("buyer.MyBid", compact('MyBids'));
    }
}
