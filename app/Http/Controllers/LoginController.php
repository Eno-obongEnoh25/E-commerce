<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function show()
    {
        return view('login');
    }

    public function showlogout()
    {
        return view('logout');
    }

    public function login(Request $request){
    	$this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        Auth::attempt($request->only('email', 'password'));

        if(!auth()->user())
        {
            return redirect()->route('login')->with('Invalid', 'Invalid Login Details');
        }

        if(auth()->user() && auth()->user()->is_admin)
        {
            return redirect()->route('admindashboard');
        }

        return redirect()->route('userdashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }
}
