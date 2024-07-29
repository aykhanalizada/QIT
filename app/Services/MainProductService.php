<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MainProductService
{
    public function createProduct(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
        ]);


        $product = Product::create([
            'name' => $request->name,
            'category_id' => $request->category,
        ]);
    }


    public function updateProduct(Request $request)
    {

        $request->validate([
            'name' => 'required'
        ]);


        $user = Product::find($request->id);
        $user->update([
            'name' => $request->name,
            'category_id' => $request->category,
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
