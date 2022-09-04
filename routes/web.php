<?php

use App\Http\Controllers\FlutterwaveController;
use App\Http\Controllers\LangController;
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
    Route::get('seller-registraton', [App\Http\Controllers\SellerController::class, 'registration'])->name("seller-registration");
    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');

});


Route::group(['prefix' => 'notification'], function () {
    Route::get('seller', [App\Http\Controllers\NotificationContoller::class, 'SellerShowNotificaton'])->name("SellerNotify");




    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');

});



Route::group(['prefix' => 'product'], function () {
    Route::get('upload', [App\Http\Controllers\ProductController::class, 'create'])->name("upload");
    Route::post('upload', [App\Http\Controllers\ProductController::class, 'store'])->name('upload');
    Route::get('all', [App\Http\Controllers\ProductController::class, 'AllProduct'])->name('all');
    Route::get('bid/{id}', [App\Http\Controllers\ProductController::class, 'SubmitBidPage'])->name('SubmitBidPage');
    Route::get('sold', [App\Http\Controllers\ProductController::class, 'SoldItem'])->name('SoldItem');
    Route::get('search', [App\Http\Controllers\ProductController::class, 'search'])->name('search');



    // Route::get('sell-item', [App\Http\Controllers\SellerController::class, 'create'])->name('sell-item');
    // Route::post('sell-item', [App\Http\Controllers\SellerController::class, 'index'])->name('sell-item');

});


Route::group(['prefix' =>  'Buyer'], function () {
    Route::post('bid', [App\Http\Controllers\BuyerController::class, 'SubmitBidFinally'])->name('SubmitBidPage');
    Route::get('mybid', [App\Http\Controllers\BuyerController::class, 'MyBidItem'])->name('MyBidItem');
});


Route::group(['prefix' => 'winning'], function () {
    Route::get('bid', [App\Http\Controllers\WinningController::class, 'Index'])->name('Index');
});



Route::group(['prefix' => 'category'], function () {
    Route::get('item/{id}', [App\Http\Controllers\CategoryController::class, 'Category'])->name('categoryItem');
});


Route::group(['prefix' => 'dashboard'], function () {
    Route::get('seller', [App\Http\Controllers\DashboardController::class, 'SellerDashboard'])->name('SellerDashboard');
    Route::get('buyer', [App\Http\Controllers\DashboardController::class, 'BuyerDashboard'])->name('BuyerDashboard');
});




Route::group(['prefix' => 'admin'], function () {
    Route::get('user', [App\Http\Controllers\AdminController::class, 'ManageUser'])->name('AdminUserDashboard');
    Route::get('user/{id}', [App\Http\Controllers\AdminController::class, 'ViewUserAdmin'])->name('ViewUserAdmin');
    Route::post('users/{id}', [App\Http\Controllers\AdminController::class, 'BlockUserAdmin'])->name('BlockUserAdmin');
    Route::post('users/block/{id}', [App\Http\Controllers\AdminController::class, 'UnBlockUserAdmin'])->name('UnBlockUserAdmin');
    Route::get('product', [App\Http\Controllers\AdminController::class, 'AdminProduct'])->name('AdminProduct');
    Route::post('product/delete/{id}', [App\Http\Controllers\AdminController::class, 'AdminProductDelete'])->name('AdminProductDelete');
    Route::get('category', [App\Http\Controllers\AdminController::class, 'AdminCategory'])->name('AdminCategory');
    Route::post('category/delete/{id}', [App\Http\Controllers\AdminController::class, 'AdminCategoryDelete'])->name('AdminCategoryDelete');
    Route::get('add/category', [App\Http\Controllers\AdminController::class, 'addAdminCategory'])->name('addAdminCategory');
    Route::post('add/category', [App\Http\Controllers\AdminController::class, 'CreateAdminCategory'])->name('CreateAdminCategory');

    // UnBlockUserAdmin
    // ViewUserAdmin
});

Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [App\Http\Controllers\ContactController::class, 'index'])->name('Contact');
    Route::post('/', [App\Http\Controllers\ContactController::class, 'store'])->name('ContactUs');


    // UnBlockUserAdmin
    // ViewUserAdmin
});





Route::get('lang/home', [LangController::class, 'index']);

Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');




// RaveController@callback


// The route that the button calls to initialize payment
Route::post('/pay', [FlutterwaveController::class, 'initialize'])->name('pay');
// The callback url after a payment
Route::get('/rave/callback', [FlutterwaveController::class, 'callback'])->name('callback');

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
