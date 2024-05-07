<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\DGX_Product;
use App\Models\DVX_Product_Perakende;
use App\Models\DVX_Product_Topdan;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function products()
    {
        $dgxProducts = DGX_Product::all();
        $dvxTopdanProducts = DVX_Product_Topdan::all();
        $dvxPerProducts = DVX_Product_Perakende::all();

        $companies = Company::all();
        $categories = Category::all();
//        dd($dgxProducts);
        return view('products', compact('dgxProducts',
            'dvxTopdanProducts',
            'dvxPerProducts',
            'companies',
            'categories'
        ));
    }





}
