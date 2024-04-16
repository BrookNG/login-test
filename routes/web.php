<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IdeaController;
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

Route::get('/', [IdeaController::class, 'index'])->name('home');
Route::post('/idea', [IdeaController::class, 'store'])->name('idea.store');
Route::get('/idea', [IdeaController::class, 'index'])->name('idea.index');
Route::get('/terms', function(){
    return view('terms');
});


