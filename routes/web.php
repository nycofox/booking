<?php


use Illuminate\Support\Facades\Auth;
use \Illuminate\Support\Facades\Session;
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

require(__DIR__ . '/_auth.php');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('frontend.dashboard');
    })->name('home');

    Route::middleware('role:teacher')->group(function () {
        Route::get('backend', [\App\Http\Controllers\Backend\DashboardController::class, 'index'])
            ->name('backend.dashboard');

        Route::get('/backend/rooms', [\App\Http\Controllers\Backend\RoomController::class, 'index'])
            ->name('rooms.index');

        Route::get('backend/settings', [\App\Http\Controllers\Backend\SettingsController::class, 'index'])
            ->name('settings.index');
        Route::patch('backend/settings', [\App\Http\Controllers\Backend\SettingsController::class, 'update'])
            ->name('settings.update');
    });
});
