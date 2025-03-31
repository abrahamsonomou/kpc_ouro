<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Specialite;
use App\Models\Pays;
use App\Models\Ville;

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
            'password' => bcrypt($request->password)
            // Hash::make($request->password),
        ]);

        return redirect()->route('login');
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Current password is incorrect.']);
        }

        $user->password = Hash::make($request->new_password);
        $user->save();

        if ($user->hasRole('admin')) {
            return redirect()->route('admin.settings')->with('success', 'Password updated successfully.');
        } elseif ($user->hasRole('student')) {
            return redirect()->route('students.settings')->with('success', 'Password updated successfully.');
        } elseif ($user->hasRole('instructor')) {
            return redirect()->route('instructors.settings')->with('success', 'Password updated successfully.');
        } 

    }

    public function show_profile()
    {
        $user = Auth::user();

        $pays = Pays::where('active', 1)->get();
        $villes = Ville::where('active', 1)->get();
        $specialites = Specialite::where('active', 1)->get();

        if ($user->hasRole('admin')) {
            return view('admin.settings', compact('user','pays', 'villes', 'specialites'));
        } elseif ($user->hasRole('student')) {
            return view('students.settings', compact('user','pays', 'villes', 'specialites'));
        } elseif ($user->hasRole('instructor')) {
            return view('instructors.settings', compact('user','pays', 'villes', 'specialites'));
        } 
    }

    public function update_profile(Request $request)
    {
        $user = Auth::user();
        $pays = Pays::where('active', 1)->get();
        $villes = Ville::where('active', 1)->get();
        $specialites = Specialite::where('active', 1)->get();

        if ($request->isMethod('post')) {

            $request->validate([
                'first_name' => 'nullable|string|max:255',
                'last_name' => 'nullable|string|max:255',
                'telephone' => 'nullable|string|max:15',
                'date_naissance' => 'nullable|string',
                'adresse1' => 'nullable|string|max:255',
                'adresse2' => 'nullable|string|max:255',
                'pays_id' => 'exists:pays,id',
                'ville_id' => 'exists:villes,id',
                'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

                'bio' => 'nullable|string|max:1000',
            ]);

            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->telephone = $request->telephone;
            $user->date_naissance = $request->date_naissance;
            $user->adresse1 = $request->adresse1;
            $user->adresse2 = $request->adresse2;
            $user->ville_id = $request->ville_id;
            $user->pays_id = $request->pays_id;
            $user->bio = $request->bio;

            if ($request->hasFile('avatar')) {
                $fileExtension = $request->file('avatar')->getClientOriginalExtension();
                $fileName = pathinfo($request->file('avatar')->getClientOriginalName(), PATHINFO_FILENAME);
                $fileName = $fileName.'_'.uniqid().'_'.time().'.'.$fileExtension;
                $request->file('avatar')->storeAs('public/users/avatar', $fileName);
                $validatedData['avatar'] = $fileName;
            }

            $user->save();

            if ($user->hasRole('admin')) {
                return redirect()->route('admin.settings')->with('success', 'Profile updated successfully.');
            } elseif ($user->hasRole('student')) {
                return redirect()->route('students.settings')->with('success', 'Profile updated successfully.');
            } elseif ($user->hasRole('instructor')) {
                return redirect()->route('instructors.settings')->with('success', 'Profile updated successfully.');
            } 
        } 

        if ($user->hasRole('admin')) {
            return view('admin.settings', compact('user','pays', 'villes', 'specialites'));
        } elseif ($user->hasRole('student')) {
            return view('students.settings', compact('user','pays', 'villes', 'specialites'));
        } elseif ($user->hasRole('instructor')) {
            return view('instructors.settings', compact('user','pays', 'villes', 'specialites'));
        } 

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
