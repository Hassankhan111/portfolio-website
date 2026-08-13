<?php


namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller

{
    /**
     * Show login page.
     */
    public function showLogin()
    {
        return view('auth.login');
    }

    /**
     * Handle login.
     */
    public function login(Request $request)
    {
        // 1. Validate user input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // 2. Try to authenticate the user
        if (Auth::attempt($credentials, $request->boolean('remember'))) {

            // 3. Regenerate session after successful login
            $request->session()->regenerate();

            // 4. Redirect to admin dashboard
            return redirect()->intended(
                route('admin')
            );
        }

        // 5. Login failed
        return back()->withErrors([
            'email' => 'The provided email or password is incorrect.',
        ])->onlyInput('email');
    }

    /**
     * Logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate current session
        $request->session()->invalidate();

        // Generate new CSRF token
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}