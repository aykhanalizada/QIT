<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
    public function setting()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('setting',compact('products', 'categories'));
    }

    public function settingProduct()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('settings.setting-product',compact('products','categories'));
    }

    public function updateProduct(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required'
        ]);


        $user = Product::find($request->id);

        $user->update([
            'name' => $request->name,
            'category_id' => $request->category,
        ]);

//        return back();
    }

    public function createProduct(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
        ]);


        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
        ]);


        return back();
    }



}
