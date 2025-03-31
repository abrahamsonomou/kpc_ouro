<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inscription;

class StudentController extends Controller
{
    //
    public function my_cours()
    {
        $enroulements = Inscription::where('user_id', auth()->id())->where('active', 1)->where('etat', 1)->paginate(1);
        $totalcours = $enroulements->count();

        return view('students.my_cours', compact('enroulements', 'totalcours'));
    }

    public function panier()
    {
        $enroulements = Inscription::where('user_id', auth()->id())->where('active', 0)->where('etat', 0)->paginate(1);
        $totalcours = $enroulements->count();

        return view('students.panier', compact('enroulements', 'totalcours'));
    }

    public function settings()
    {
        
        return view('students.settings');
    }

    public function dashboard()
    {
        // Count the total number of enroulements
        $totalEnroulements = Inscription::count();

        // Count the number of activated Enroulements (etat = 1)
        $activatedEnroulements = Inscription::where('etat', 1)->count();

        // Count the number of pending Enroulements (etat = 0)
        $pendingEnroulements = Inscription::where('etat', 0)->count();
    
        // Count the number of rejected Enroulements (etat = 2)
        $rejectedEnroulements = Inscription::where('etat', 2)->count();

        return view('students.dashboard', compact('totalEnroulements', 'activatedEnroulements', 'pendingEnroulements', 'rejectedEnroulements'));
    }

}
