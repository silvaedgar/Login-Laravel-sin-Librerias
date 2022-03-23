<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {

        $users = User::all();
        return view('users.index',compact('users'));
    }

    public function store(Request $request) {

        $request->validate ([
            'name' => 'required|string|max:30',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8'
        ]);

        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index');
    }

    public function create() {
        return view('users.create');
    }
}
