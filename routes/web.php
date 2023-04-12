<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use GuzzleHttp\Middleware;

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

/*Restaurant route */

Route::prefix('restaurant')->group(function () {

    Route::get('/login', [RestaurantController::class, 'Index'])->name('login_form');
    Route::post('/login/owner', [RestaurantController::class, 'Login'])->name('restaurant.login');

    Route::get('/dashboard', [RestaurantController::class, 'Dashboard'])->name('restaurant.dashboard')
        ->Middleware('Restaurant');

    Route::get('/logout', [RestaurantController::class, 'logout'])->name('restaurant.logout')
        ->Middleware('Restaurant');

    Route::get('/register', [RestaurantController::class, 'Register'])->name('restaurant.register');
    Route::post('/register/create', [RestaurantController::class, 'RegisterCreate'])->name('restaurant.register.create');
});


Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
