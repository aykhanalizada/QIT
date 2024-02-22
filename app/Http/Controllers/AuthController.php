<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{


    public function register(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required|max:255',
            'password' => 'required|min:4'
        ]);

        $hashPassword = Hash::make($validated['password']);
        $user = new User([
            'username' => $request->username,
            'password' => $hashPassword
        ]);
//        dd($user);
        $user->save();

        return redirect()->route('loginPage');
    }

    public function login(Request $request)
    {
        $validation=$request->validate([
           'username'=>'required',
            'password'=>'required',
        ]);


        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            return view('home');
        }

        return redirect()->back()->withInput()->withErors($validation);

    }


}
