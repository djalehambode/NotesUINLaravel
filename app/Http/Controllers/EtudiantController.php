<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function index(Classe $classe)
    {
        $etudiants = Etudiant::where('classe_id', $classe->id)->get();
        return view('etudiants.index', compact('etudiants', 'classe'));
    }
}
