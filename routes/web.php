<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\EnfantController;
use App\Http\Controllers\ActiviteController;

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

Route::get('/', [accueilController::class, 'index']);

Route::get('enfant', [EnfantController::class, 'index']);

Route::get('activite', [ActiviteController::class, 'index']);

Route::fallback(function () {
    return view('error');
});
    
    
Route::resource('enfant', EnfantController::class);
Route::resource('activite', ActiviteController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('accueil');
    })->name('accueil');
});
