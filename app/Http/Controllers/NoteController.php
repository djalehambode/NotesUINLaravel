<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoteController extends Controller
{
    //
    public function index(Module $module)
    {
        $etudiants = Etudiant::where('classe_id', $module->classe_id)->get();
        return view('notes.index', compact('etudiants', 'module'));
    }

    public function store(Request $request, Module $module)
    {
        foreach ($request->notes as $etudiant_id => $note) {
            Note::updateOrCreate(
                ['etudiant_id' => $etudiant_id, 'module_id' => $module->id],
                ['note' => $note]
            );
        }
        return redirect()->back()->with('success', 'Notes enregistrées avec succès');
    }
}
