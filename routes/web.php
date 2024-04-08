<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;


// Rotta generica
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');

// Studenti
Route::get('/studenti', [StudentController::class, 'studenti'])->name('studenti');

// Docenti
Route::get('/teacher', [TeacherController::class, 'insegnanti'])->name('docenti');

// Rotta Studenti parametrica
Route::get('/studenti/dettaglio/{id}', [StudentController::class, 'dettaglio'])->name('dettaglio.studenti');

// Rotta Docenti parametrica
Route::get('/docenti/dettaglio/{id}', [TeacherController::class, 'dettaglio'])->name('dettaglio.docenti');