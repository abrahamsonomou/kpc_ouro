<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function my_cours()
    {
        return view('students.my_cours');
    }

    public function panier()
    {
        return view('students.panier');
    }

    public function settings()
    {
        return view('students.settings');
    }

    public function dashboard()
    {
        return view('students.dashboard');
    }

}
