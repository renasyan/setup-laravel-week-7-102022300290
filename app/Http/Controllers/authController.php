<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use App\Models\User; 

class authController extends Controller
{
    //
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {
            return redirect()->intended('welcome')->with('success', 'Login successful');
        }

        return back()->with('error', 'Invalid credentials');
        // return $request->all();
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('login')->with('success', 'Logout successful');
    }


    public function register()
    {
        return view('register');
    }

    public function registerAuth(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->login($user);

        return redirect()->route('login')->with('success', 'Registration successful');
    }
}
