<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Bureau;

class SiteController extends Controller
{
    
    public function home()
    {
        return view('site.home');
    }

    public function contact()
    {
        $bureaux = Bureau::all();
        return view('site.contact', compact('bureaux'));
    }

     /**
     * Enregistre un nouveau contact (Create).
     */
    public function store_contact(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            // 'email' => 'required|email|unique:contacts,email',
            'email' => 'required|email',
            'sujet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact_success')->with('success', 'Message envoyé avec succès !');
    }

    public function contact_success()
    {
        return view('site.contact_success');
    }

    public function cours()
    {
        return view('site.cours');
    }

    public function cours_details()
    {
        return view('site.cours-details');
    }

    public function blog()
    {
        return view('site.blog');
    }

    public function blog_details()
    {
        return view('site.blog-details');
    }

    public function events()
    {
        return view('site.events');
    }


    public function instructors()
    {
        return view('site.instructors');
    }


    public function about()
    {
        return view('site.about');
    }

}
