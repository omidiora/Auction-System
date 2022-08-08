<?php

namespace App\Http\Controllers;
// BuyerProduct

use App\Models\Buyer;
use App\Models\Product;
use App\Models\BuyerProduct;
use App\Models\Category;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $categories = Category::all();
        if (Auth::id()) {
            return view('seller.product', compact('categories'));
        }

        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // uniqune code 

        $a = round(microtime(true));
        $c = substr($a, 4);

        $request->validate([
            'name' => 'required|max:255',
            'condition' => 'required',
            'description' => 'required',
            'price' => 'required|max:255',
            "category" => 'required',
            "cover_image" => "required",

        ]);


        $formInput = $request->all();
        $images = array();


        $product = new Product();
        $product->name = $request->name;
        $product->condition = $request->condition;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->starting_date = $request->starting_date;
        $product->ending_date = $request->ending_date;
        $product->category = $request->category;
        $product->uniqueId = $c;
        if (Auth::id()) {
            $product->user_id = Auth::id();
        }




        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $imageName = time() . '-' . $file->getClientOriginalName();
            // $file->move(public_path('/cover'), $imageName);
            Storage::disk('public')->put($imageName, 'adaadfd');


            $product->cover_image = $imageName;


            $product->save();
        }
        // if (Auth::id()) {
        //     // $data->user_id = Auth::id();
        // }

        if ($files = $request->file('image')) {
            foreach ($files as $file) {
                $name = $file->hashName();
                $file->move(storage_path('/fullimage'), $name);
                $images[] = $name;
                Image::create(array_merge(
                    $formInput,
                    [
                        'product_id' => $product->uniqueId,
                        'image' => ($name),
                    ],
                ));
            }
        }

        return back()->with('success', 'Successfully Uploaded a Product!');

        if ($request->hasFile('cover')) {
            $file = $request->file('cover');
            $imageName = time() . '-' . $file->getClientOriginalName();
            $file->move('/cover', $imageName);


            $post = new Product([
                "name" => $request->name,
                "condition" => $request->condition,
                "description" => $request->description,
                "price" => $request->price,
                "starting_date" => $request->starting_date,
                "ending_date" => $request->ending_date,
                "category" => $request->category,
                "user_id" => 1,
                "cover_image" => $imageName


            ]);

            $post->save();
        }



        // if ($request->hasFile("image")) {
        //     $files = $request->file("image");
        //     foreach ($files as $file) {
        //         $imageName = time() . '-' . $file->getClientOriginalName();
        //         $request['product_id'] = 1;
        //         $request['image'] = $imageName ;
        //         $file->move(\public_path('/images/'), $imageName);
        //         Image::create($request->all());
        //     }
        // }
        // return back()->with('success', 'Successfully registered a new student!');

        // $files = [];
        // if ($request->has("image")) {
        //     foreach ($request->file('image') as $image) {
        //         $imageName = 'title' . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
        //         $image->move(public_path('product_images'), $imageName);
        //         $files[] = $imageName;
        //     }

        //     $image = new File();
        //     $image->image = $files;





        // Product::create([
        //     "name" => $request->name,
        //     "condition" => $request->condition,
        //     "description" => $request->description,
        //     "price" => $request->price,
        //     "starting_date" => $request->starting_date,
        //     "ending_date" => $request->ending_date,
        //     "category" => $request->category,
        //     "user_id" => 1,
        //     "image" => $image




        // ]);

        // return back()->with('success', 'Successfully registered a new student!');
        // }

        // $formInput = $request->all();
        // $image = array();
        // if ($files = $request->file('image')) {
        //     foreach ($files as $file) {
        //         $name = $file->getClientOriginalName();
        //         $file->move('images', $name);
        //         $image[] = $name;
        //     }
        // }
        // Product::create(array_merge(
        //     $formInput,
        //     [
        //         'user_id' => 1,
        //         'image' => ç($image)

        //     ]
        // ));
        // return redirect()->back();

        // if ($request->hasFile('image')) {

        //     // Save the file locally in the storage/public/ folder under a new folder named /product
        //     $request->file->store('product', 'public');

        //     // Store the record, using the new file hashname which will be it's new filename identity.
        //     $product = new Product([
        //         "image" => $request->file->hashName(),

        //     ]);

        //     $product->save(); // Finally, save the record.
        // }


        // $data->name = $request->name;
        // $data->condition = $request->condition;
        // $data->image = $request->image;
        // $data->description = $request->description;
        // $data->price = $request->price;
        // $data->starting_date = $request->starting_date;
        // $data->ending_date = $request->ending_date;
        // $data->category = $request->category;
        // if (Auth::id()) {
        //     $data->user_id = Auth::id();
        // }
        // $data->save();
        // // return rediret()->back();

        // //     Product::create($input);
        // return back()->with('success', 'Successfully registered a new student!');

        // $data->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }


    public function AllProduct()
    {
        $products = Product::all();
        $bid = DB::table('products')
            ->join('buyers', 'products.id', '=', 'buyers.product_id')->get();

        return view('allproduct', compact('products'));
    }





    public function SubmitBidPage($id)
    {
        $MAX_PRICE = DB::table('buyers')->where('product_id', '=', $id)->max('price');



        // dd($min_id);
        $products = Product::where('id', $id)->first();
        $bids = Product::where('id', $id)->first();
        $count_bidder = Buyer::where('product_id', $id)->count();
        return view("submitbid", compact("products", 'MAX_PRICE', 'count_bidder'));
    }
}
