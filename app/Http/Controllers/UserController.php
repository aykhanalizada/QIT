<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Company;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService
    ){}


    public function users(Request $request)
    {
        $users = User::paginate(10);
        $companies = Company::all();

        return view('users', compact('users', 'companies'));
    }

    public function updateUser(UpdateUserRequest $request)
    {
        $this->userService->updateUser($request);

//        $user->update($request->validated());

        return response()->json([
            "message" => "Successfully updated"
        ], 201);
    }

    public function createUser(CreateUserRequest $request)
    {

        $this->userService->createUser($request);

        return response()->json([
            'message' => 'Successfully created'
        ]);
    }


    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();

//        return redirect('/users');
    }


}
