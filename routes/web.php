<?php

use App\Http\Controllers\EtudiantController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {return view('welcome');});

Route::get('index', [EtudiantController::class, 'index'])->name('site.index');
Route::get('site/{etudiant}', [EtudiantController::class, 'show'])->name('site.show');
Route::get('site-create', [EtudiantController::class, 'create'])->name('site.create');
Route::post('site-create', [EtudiantController::class, 'store']);
Route::get('site-edit/{etudiant}', [EtudiantController::class, 'edit'])->name('site.edit');
Route::put('site-edit/{etudiant}', [EtudiantController::class, 'update']);
Route::delete('site/{etudiant}', [EtudiantController::class, 'destroy']);


//Route::get('site-page', [EtudiantController::class, 'pages']);
