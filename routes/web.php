<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfileController;
use App\Models\Curso;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $cursos = Curso::all();

    return view('welcome', compact('cursos'));
});

Route::get('/planos', function () {
    return view('planos.index');
})->name('planos');

Route::get('/sobre', function () {
    return view('sobre.index');
})->name('sobre');



Route::get('/cursos/{id}', [CursoController::class, 'show']);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
