<?php

namespace App\Http\Controllers;

use App\Models\Candidat;
use Illuminate\Http\Request;

class AutController extends Controller
{
    public function Index()
    {
        return view('entreprise');
    }

    public function Index2()
    {
        return view('candidat');
    }
    public function wait()
    {
        return view('attente');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'code' => 'required|string|max:20'
        ]);

        // Enregistrez le fichier PDF dans le stockage de Laravel
        if(isset($request->cv)){
            $cvPath = $request->file('cv')->store('candidats', 'public');
        }else{
            $cvPath = "";
        }
        // Enregistrez la candidature dans la base de données
        Candidat::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'code'=>$request->code,
            'cv_path' => $cvPath,
            'phone' => $request->phone,
            'status'=>$request->status
        ]);

        // Redirection ou autre logique
        return redirect()->back()->with('success', 'Candidature soumise avec succès.');
    }
}
