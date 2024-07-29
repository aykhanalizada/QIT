<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\Category;
use App\Models\Company;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function loginPage(Request $request)
    {
        return view('login');
    }

    public function registerPage(Request $request)
    {
        return view('register');
    }

    public function home(Request $request)
    {
//        if (Gate::allows('access-main-page')) {
        return view('home');
//        } else {
//            abort(403);
//        }
    }

    public function setting()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('setting',compact('products', 'categories'));
    }





}
