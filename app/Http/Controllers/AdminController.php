<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;


class AdminController extends Controller
{
    //

    public function AdminLogout()
    {
        Auth::logout();
        return redirect("/admin/login");
    }

    public function LoginPage()
    {
        return view("admin.LoginPage");
    }




    public function ManageUser()
    {

        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();

        return view('admin.User', compact("allUser", 'allCategories', 'products', 'contacts'));
    }


    public function ViewUserAdmin(Request $request, $id)
    {
        $users = User::where('id', $id)->first();

        return view('seller.profile', compact("users"));
    }

    public function BlockUserAdmin(Request $request, $id)
    {
        $users = User::where('id', $id)->first();
        if ($users) {
            $users->status = '1';
            $users->save();
            return redirect('/admin/user')->with('blocked', 'You have successfully block the user.');
        }

        return redirect()->back()->with('blocked', 'User not found.');
    }

    public function UnBlockUserAdmin(Request $request, $id)
    {
        $users = User::where('id', $id)->first();
        if ($users) {
            $users->status = '2';
            $users->save();
            return redirect()->back()->with('unblocked', 'User is unblocked successfully.');
        }
    }


    public function AdminProduct(Request $request)
    {
        $allUser = User::all();
        $allCategories = Category::all();

        $products = Product::all();
        $contacts = Contact::all();



        return view('admin.AdminProduct', compact("allUser", 'allCategories', 'products', 'contacts'));
    }


    public function AdminProductDelete($id)
    {
        $deleteProduct = Product::where('id', $id)->first();
        $deleteProduct->delete();
        return redirect()->back()->with('deleteProduct', 'Product Item deleted succesfully');
    }



    public function AdminCategory()
    {

        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();

        return view('admin.AdminCategory', compact("allUser", 'allCategories', 'products', 'contacts'));
    }
    public function AdminCategoryDelete($id)
    {


        $deleteCategory = Category::where('id', $id)->first();
        $deleteCategory->delete();
        return redirect()->back()->with('deleteCategory', 'Category Item deleted succesfully');
    }


    public function CreateAdminCategory(Request $request)
    {


        $category = new Category();
        $category->category = $request->category;
        $category->save();

        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();

        return redirect(route("AdminCategory"))->with('CategoryAdd', 'Category Item Added succesfully');;
        // ('admin.AdminCategory', compact("allUser", 'allCategories', 'products'));
    }



    public function addAdminCategory()
    {

        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();
        return view('admin.addAdminCategory', compact("allUser", 'allCategories', 'products', 'contacts'));
    }


    public function Messages()
    {
        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();

        return view('admin.Message', compact("allUser", 'allCategories', 'products', 'contacts'));
    }


    public function adminViewCategory($id)
    {
        $categories  =  DB::table('categories')->where('products.id', $id)
            ->join('products', 'products.category', '=', 'categories.id')->get();


        return view('category.Item', compact("categories"));
    }


    public function EditAdminCategory($id)
    {

        $categories = Category::where('id', $id)->first();

        return view('admin.EditCategory', compact("categories"));
    }


    public function UpdateAdminCategory(Request $request, $id)
    {
        $request->validate([
            'category' => 'required',

        ]);
        $categories = Category::where('id', $id)->first();
        $categories->category = $request->category;
        $categories->save();



        return redirect()->back()->with('success', 'Category Updated');
    }


    public function AdminViewBid()
    {

        $allUser = User::all();
        $allCategories = Category::all();
        $products = Product::all();
        $contacts = Contact::all();

        $BidProduct =  DB::table('products')->join('buyers', 'buyers.product_id', '=', 'products.id')->orderBy('id', 'desc');


        return view('admin.AdminBid', compact("allUser", 'allCategories', 'products', 'contacts'));
    }



    // AdminViewBid


}
