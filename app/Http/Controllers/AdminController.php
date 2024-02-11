<?php

namespace App\Http\Controllers;

use App\Models\Etude;
use App\Models\diplome;
use App\Models\Candidat;
use App\Models\Categorie;
use Illuminate\Http\Request;
use App\Models\Qualif;
use App\Models\Util;

class AdminController extends Controller
{
    public function Admin()
    {
        $entreprises = Candidat::where('status', 'entreprise')->get();

        return view('admin', [
            'entreprise' => $entreprises
        ]);
    }
    public function Contact()
    {
        $candidat = Candidat::where('status', 'candidat')->get();
        return view('listcontact', [
            'candidats' => $candidat
        ]);
    }
    public function Entreprise()
    {
        return view('listentreprise');
    }
    public function Info($id)
    {
        $entrepriseInfo = Candidat::FindOrFail($id);
        return view('information', [
            'entreprise' => $entrepriseInfo
        ]);
    }
    public function Detail($id)
    {
        $pers = Util::FindOrFail($id);
        return view('detail',[
            'personne'=>$pers
        ]);
    }
    public function Qualif($id)
    {
        $qualifi = Util::FindOrFail($id);
        return view('qualification', [
            'qualif' => $qualifi
        ]);
    }

    public function CreateQualification(Request $request)
    {
        $request->validate([
            'nom_qualification' => 'required|string|max:255',
        ]);
        Qualif::create([
            'util_id'=>$request->id,
            'nom_qualification' => $request->nom_qualification,
        ]);
        return redirect()->back()->with('success', 'qualification ajouté.');
    }

    public function Diplome($id)
    {
        $diplomes = Util::FindOrFail($id);
        return view('diplome', [
            'diplome' => $diplomes
        ]);
    }
    public function CreateDiplome(Request $request)
    {
        $request->validate([
            'diplome' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date'
        ]);

        diplome::create([
            'util_id'=>$request->id,
            'nom_diplome' => $request->diplome,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);
        return redirect()->back()->with('success', 'diplome ajouté.');
    }
    public function Etude($id)
    {
        $etude = Util::FindOrFail($id);
        return view('etudes', [
            'etudeformation' => $etude
        ]);
    }

    public function CreateEtude(Request $request)
    {
        $request->validate([
            'etude' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date'
        ]);
        Etude::create([
            'util_id'=>$request->id,
            'nom_etude' => $request->etude,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);
        return redirect()->back()->with('success', 'etudes ajouté.');
    }
    public function Categorie()
    {
        $categori = Categorie::all();
        return view('categorie', [
            'categorie' => $categori
        ]);
    }
    public function CreateCategorie(Request $request)
    {
        $request->validate([
            'nom_categorie' => 'required|string|max:255',
        ]);
        Categorie::create([
            'nom_categorie' => $request->nom_categorie,
        ]);
        return redirect()->back()->with('success', 'catégorie ajouté.');
    }
    public function Person($id)
    {
        $personne = Candidat::FindOrFail($id);
        return view('person', [
            'person' => $personne
        ]);
    }
    public function CreateFiche(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'code' => 'required|string|max:20',
            'cv' => 'required|string|max:255'
        ]);

        Util::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'code' => $request->code,
            'phone' => $request->phone,
            'cv' => $request->cv
        ]);

        $element = Candidat::FindOrFail($request->id);
        $element->delete();
        return redirect()->route('fiche_cv');
    }
    public function DeleteCandidat($id)
    {
        $candidat = Candidat::findOrFail($id);
        $candidat->delete();

        return redirect()->route('contactlist')->with('success', 'Candidature supprimée avec succès.');
    }

    public function Fiche()
    {
        $utilisateurs = Util::all();
        return view('fiche', [
            'utilisateur' => $utilisateurs
        ]);
    }
}
