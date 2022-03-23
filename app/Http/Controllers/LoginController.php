<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index() {
            return view('login');
    }

    public function login(Request $request) {

        // $credentials = $request->only('email','password');

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            return redirect('home');

        return redirect()->route('login')->with('status','Datos de email y/o password invalidos');
    }

    public function logout(Request $request) {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return  redirect('home');
        // $credentials = $request->only('email','password');

        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
        //     return redirect('home');

        // return redirect()->route('login')->with('status','Datos de email y/o password invalidos');
    }

}
