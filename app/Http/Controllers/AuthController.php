<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

    // Si l'option "Remember me" est cochée, ajouter l'option `true`
    $remember = $request->has('remember');

    // Tentative de connexion
    if (Auth::attempt($credentials, $remember)) {
        // Redirection après connexion réussie
        $request->session()->regenerate();
        return redirect()->intended('/');

    }

    // Retour en cas d'échec
    return back()->withErrors([
        'email' => 'Les informations d’identification ne correspondent pas.',
    ])->onlyInput('email');
    }

    public function dashboard()
    {
        $user = Auth::user();
        if ($user->hasRole('admin')) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->hasRole('student')) {
            return redirect()->route('students.dashboard');
        } elseif ($user->hasRole('instructor')) {
            return redirect()->route('instructors.dashboard');
        } 
        else {
            return redirect()->intended('/');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->intended('/');
        // return redirect()->route('login');
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function resetPassword()
    {
        return view('auth.reset-password');
    }

    public function verifyEmail()
    {
        return view('auth.verify-email');
    }

    public function resendVerificationEmail()
    {
        return view('auth.resend-verification-email');
    }
    


}
