<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClasseController extends Controller
{
    //
    public function index()
    {
        $classes = Classe::all();
        return view('classes.index', compact('classes'));
    }
}
