<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => 'seller'], function () {
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name("personalProfile");
    Route::get('item', [App\Http\Controllers\ProfileController::class, 'MyItem'])->name("myitem");
    Route::get('seller-registraton', [App\Http\Controllers\SellerController::class, 'registration']);
    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');

});



Route::group(['prefix' => 'product'], function () {
    Route::get('upload', [App\Http\Controllers\ProductController::class, 'create']);
    Route::post('upload', [App\Http\Controllers\ProductController::class, 'store'])->name('upload');
    Route::get('all', [App\Http\Controllers\ProductController::class, 'AllProduct'])->name('all');
    Route::get('bid/{id}', [App\Http\Controllers\ProductController::class, 'SubmitBidPage'])->name('SubmitBidPage');


    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');

});


Route::group(['prefix' => 'Buyer'], function () {
    Route::post('bid', [App\Http\Controllers\BuyerController::class, 'SubmitBidFinally'])->name('SubmitBidPage');
});


Route::group(['prefix' => 'category'], function () {
    Route::get('item/{id}', [App\Http\Controllers\CategoryController::class, 'Category'])->name('categoryItem');
});

// Route::get('/category',function(){
//     \App\Models\Category::create([

//         "category"=>"Clothes",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Watch",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Book",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Bag",

//     ]);

//     \App\Models\Category::create([

//         "category"=>"Shoes",

//     ]);


//     \App\Models\Category::create([

//         "category"=>"Jewelry",

//     ]);




// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
