<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function reviews()
    {
        return view('admin.reviews');
    }

    public function cours()
    {
        return view('admin.cours');
    }

    public function cours_categorie()
    {
        return view('admin.cours_categorie');
    }

    public function details_cours()
    {
        return view('admin.details_cours');
    }

    public function articles()
    {
        return view('admin.articles');
    }

    public function settings()
    {
        return view('admin.settings');
    }

    public function instructors()
    {
        return view('admin.instructors');
    }

    public function instructors_request()
    {
        return view('admin.instructors_request');
    }

    public function students()
    {
        return view('admin.students');
    }

    public function contacts()
    {
        // $contacts = Contact::latest()->get();
        $contacts = 1;
        return view('admin.list_contacts', compact('contacts'));
    }


}
