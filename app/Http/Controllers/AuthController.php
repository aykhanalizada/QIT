<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{


    public function register(Request $request)
    {

//        dd($request->name);
        $validated = $request->validate([
            'name'=>'required',
            'surname'=>'required',
            'username' => 'required|max:255',
            'password' => 'required|min:4',
            'company'=>'required',
            'rol'=>'required'
        ]);

        $hashPassword = Hash::make($validated['password']);
        $user = new User([
            'name'=>$request->name,
            'surname'=>$request->surname,
            'username' => $request->username,
            'password' => $hashPassword,
            'company_id'=>$request->company,
            'roles'=>$request->rol
        ]);
        
    //    dd($request->name);
        $user->save();

        return redirect()->route('loginPage');
    }

    public function login(Request $request)
    {
        $validation=$request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);


        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('home');
        }

        return redirect()->back()->withErrors(['error' => 'Invalid username or password'])->withInput();

    }


    public function logout(){
//        Session::flush();
        Auth::logout();
        return redirect()->route('loginPage');
    }


}
