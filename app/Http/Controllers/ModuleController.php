<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
    //
    public function index(Classe $classe)
    {
        $modules = Module::where('classe_id', $classe->id)->get();
        return view('modules.index', compact('modules', 'classe'));
    }
}
