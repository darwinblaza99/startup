<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $user = new user();

        $user->user_id  = $request->input('user_id');
        $user->name     = $request->input('name');
        $user->email    = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        return response()->json($user);
    }
}
