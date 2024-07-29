<?php

namespace App\Services;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService{


    public function createUser($request)
    {
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'company_id' => $request->company,
            'roles' => $request->rol,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

    }
    public function updateUser($request){
        $user = User::find($request->id);

        $user->update([
            'name' => $request->name,
            'surname' => $request->surname,
            'company_id' => $request->company,
            'roles' => $request->rol,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);
    }

}
