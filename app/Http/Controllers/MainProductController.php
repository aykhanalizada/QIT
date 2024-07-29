<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Services\MainProductService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class MainProductController extends Controller
{
    public function __construct(
        private MainProductService $mainProductService
    ){}

    public function product()
    {
        $products = Product::paginate(2);
        $categories = Category::all();
        return view('settings.setting-product', compact('products', 'categories'));
    }

    public function createProduct(Request $request)
    {
        $this->mainProductService->createProduct($request);

        return response()->json([
            'message' => 'Success'
        ]);
    }
    public function updateProduct(Request $request)
    {

        $this->mainProductService->updateProduct($request);

        return response()->json([
            'message' => 'Success'
        ]);
    }


    public function deleteProduct($id)
    {
        $this->mainProductService->deleteProduct($id);
    }


}
