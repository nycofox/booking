<?php

Route::get('login', function () {
    return view('auth.login');
})->middleware('guest')->name('login');

Route::post('logout', function () {
    Auth::logout();
    Session::flush();
    return redirect()->route('login');
})->middleware('auth')->name('logout');

Route::get('/auth/google', [App\Http\Controllers\Auth\GoogleController::class, 'googleRedirect'])
    ->name('google.login');
Route::get('/callback/google', [App\Http\Controllers\Auth\GoogleController::class, 'googleCallback'])
    ->name('google.callback');
