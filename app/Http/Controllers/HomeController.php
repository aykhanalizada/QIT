<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function loginPage(Request $request){
        return view('login');
    }
    public function registerPage(Request $request){
        return view('register');
    }

}
