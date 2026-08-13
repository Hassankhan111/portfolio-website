<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

    use App\Models\User;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
  
public function showregister()
{
    return view('auth.signup');
}
public function register(Request $request)
{
    $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
    ]);

    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    return redirect()->route('login')
        ->with('success', 'Account created successfully.');
}
}