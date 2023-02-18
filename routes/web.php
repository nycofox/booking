<?php


use Illuminate\Support\Facades\Auth;
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
    return view('frontend.dashboard');
})->middleware('auth')->name('home');

Route::get('login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('logout', function () {
    Auth::logout();
    return redirect()->route('login');
})->middleware('auth')->name('logout');


Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'googleRedirect'])
    ->name('google.login');
Route::get('/callback/google', [App\Http\Controllers\Auth\GoogleController::class, 'googleCallback'])
    ->name('google.callback');
