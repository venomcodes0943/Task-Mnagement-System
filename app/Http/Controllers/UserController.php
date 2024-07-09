<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

    public function update(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $validatedData = $request->validate([
                'profileImage' => 'nullable|file|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'name' => 'required|string|max:255',
                'password' => 'nullable|string|min:8',
            ]);

            $user->name = $validatedData['name'];
            if ($request->has('profileImage')) {
                $file = $request->file('profileImage');
                $path = $file->storeAs('public/avatars', $file->getClientOriginalName());
                $user->profileImage = $file->getClientOriginalName();
            }

            if (!empty($validatedData['password'])) {
                $user->password = Hash::make($validatedData['password']);
            }

            $user->save();

            return response()->json(['message' => 'Profile updated successfully.', 'file' => $request->profileImage]);
        }

        return response()->json(['error' => 'User not authenticated.'], 401);
    }



    public function profile(Request $request)
    {
        if ($request->ajax()) {
            return $user = auth()->user();
        }

        $user = auth()->user();
        return view('profile', compact('user'));
    }
}
