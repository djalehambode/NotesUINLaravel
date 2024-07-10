<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('connexion');
});
Route::get('/classes', [ClasseController::class, 'index'])->name('classes.index');
Route::get('/classes/{classe}/modules', [ModuleController::class, 'index'])->name('modules.index');
Route::get('/classes/{classe}/etudiants', [EtudiantController::class, 'index'])->name('etudiants.index');
Route::get('/modules/{module}/notes', [NoteController::class, 'index'])->name('notes.index');
Route::post('/modules/{module}/notes', [NoteController::class, 'store'])->name('notes.store');