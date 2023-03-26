<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;

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
    return view('auth.login');
});

Route::resource('Superheroe', SuperheroeController::class)->middleware('auth');

Auth::routes(['reset'=>false]);

Route::get('/home', [SuperheroeController::class, 'index'])->name('home');

Route::group(['middleware'=>'auth'], function () 
{
    Route::get('/', [SuperheroeController::class, 'index'])->name('home');
});


