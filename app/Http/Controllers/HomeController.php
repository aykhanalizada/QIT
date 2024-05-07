<?php

namespace App\Http\Controllers;

use App\Models\Company;
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

    public function users(Request $request)
    {
        $users = User::paginate(10);
        $companies = Company::all();

        return view('users', compact('users', 'companies'));
    }


    public function updateUser(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'password' => 'nullable|confirmed'
        ]);


        $user = User::find($request->id);

        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'company_id' => $request->company,
            'roles' => $request->rol,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

//        return back();
    }

    public function createUser(Request $request)
    {
        $validator = $request->validate([
            'name' => 'required',
            'surname' => 'required',
            'username' => 'required',
            'password' => 'nullable|confirmed'
        ]);


        $user = User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'company_id' => $request->company,
            'roles' => $request->rol,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);


        return back();
    }


    public function deleteUser($id)
    {
//        dd('salam');
        $user = User::find($id);
        $user->delete();

//        return redirect('/users');
    }


}
