<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstructorController extends Controller
{
    //
    public function my_cours()
    {
        return view('instructors.my_cours');
    }


    public function create_cours()
    {
        return view('instructors.create_cours');
    }

    public function my_articles()
    {
        return view('instructors.my_articles');
    }

    public function create_articles()
    {
        return view('instructors.create_articles');
    }

    public function reviews()
    {
        return view('instructors.reviews');
    }

    public function settings()
    {
        return view('instructors.settings');
    }

    public function dashboard()
    {
        return view('instructors.dashboard');
    }

}
