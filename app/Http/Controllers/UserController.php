<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register()
    {
        return view('Auth.register');
    }
    public function login()
    {
        return view('Auth.login');
    }

    public function registerSave(Request $request)
    {
        $credentials = $request->validate([
            'name' => 'required',
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        $user = User::create($credentials);

        event(new Registered($user));

        Auth::login($user);
        return redirect()->route('index');
    }

    public function loginSave(Request $request)
    {
        $credentials = $request->validate(
            [
                'email' => ['required', 'string', 'email', 'max:255'],
                'password' => ['required', 'string', 'min:8'],
            ]
        );

        if (Auth::attempt($credentials)) {
            return redirect()->route('index');
        } else {
            return back()->withErrors([
                'email' => 'User Not Found',
            ])->withInput($request->except('password'));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
