<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class SettingController extends Controller
{
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

        return response()->json([
            'message'=>'Success'
        ]);
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


        return response()->json([
            'message'=>'Success'
        ]);
    }


    public function deleteProduct($id)
    {
        try {

            if(!$id)
                return response()->json(['message'=>'Id Not Found'],Response::HTTP_NOT_FOUND);

            $product = Product::find($id);
            $product->delete();
            return response()->json(['message'=>'Success'],Response::HTTP_OK);
        }
        catch (\Exception $e) {
            return response()->json([
                'message'=>'Server Error',
                'error'=>$e->getMessage(),
                ],Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }


}
