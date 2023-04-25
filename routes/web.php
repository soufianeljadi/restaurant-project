<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TableController;
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

/*-----------------------------Restaurant route--------------------------------- */

Route::prefix('restaurant')->group(function () {
    //Auth ROUTES
    Route::get('/login', [RestaurantController::class, 'RestaurantIndex'])->name('login_form');
    Route::post('/login/owner', [RestaurantController::class, 'RestaurantLogin'])->name('restaurant.login');
    Route::get('/register', [RestaurantController::class, 'RestaurantRegister'])->name('restaurant.register');
    Route::post('/register/create', [RestaurantController::class, 'RestaurantRegisterCreate'])->name('restaurant.register.create');
    //middleware ROUTES
    Route::middleware(['Restaurant'])->group(function () {

        Route::get('/logout', [RestaurantController::class, 'logout'])->name('restaurant.logout');
        Route::get('/dashboard', [RestaurantController::class, 'dashboard'])->name('restaurant.dashboard');
        Route::get('/profile', [RestaurantController::class, 'profile'])->name('restaurant.profile');
        Route::post('/update', [RestaurantController::class, 'update'])->name('restaurant.update');
        //manage Tables
        Route::get('/tables', [TableController::class, 'index'])->name('restaurant.tables');
        Route::get('/new-table', [TableController::class, 'create'])->name('restaurant.table.create');
        Route::post('/store-table', [TableController::class, 'store'])->name('restaurant.table.store');
        Route::post('/destroy-table', [TableController::class, 'destroy'])->name('table.delete');
    });
});

/*-----------------------------End Restaurant route----------------------------- */

/*------------------------------Client route----------------------------------- */
Route::prefix('client')->group(function () {
    //Auth ROUTES
    Route::get('/login', [ClientController::class, 'ClientIndex'])->name('client_login_form');
    Route::post('/login/owner', [ClientController::class, 'ClientLogin'])->name('client.login');
    Route::get('/register', [ClientController::class, 'ClientRegister'])->name('client.register');
    Route::post('/register/create', [ClientController::class, 'ClientRegisterCreate'])->name('client.register.create');
    //middleware ROUTES
    Route::middleware(['Client'])->group(function () {

        Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
        Route::get('/logout', [ClientController::class, 'logout'])->name('client.logout');
        Route::get('/profile', [ClientController::class, 'profile'])->name('client.profile');
        Route::post('/update', [ClientController::class, 'update'])->name('client.update');
        Route::get('/reservation', [ClientController::class, 'reservation'])->name('client.reservation');
    });
});
/*-----------------------------End Client route-------------------------------- */

/*------------------------------admin route----------------------------------- */
Route::prefix('admin')->group(function () {
    //Auth ROUTES
    Route::get('/login', [AdminController::class, 'AdminIndex'])->name('admin_login_form');
    Route::post('/login/owner', [AdminController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/register', [AdminController::class, 'Adminregister'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
    //middleware ROUTES
    Route::middleware(['Admin'])->group(function () {

        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        //manage restaurants
        Route::get('/restaurants', [RestaurantController::class, 'restaurants'])->name('Admin.restaurants');
        Route::post('/destroy-restaurant', [RestaurantController::class, 'destroy'])->name('restaurant.delete');
        //manage clients
        Route::get('/clients', [ClientController::class, 'clients'])->name('Admin.clients');
        Route::post('/destroy-client', [ClientController::class, 'destroy'])->name('client.delete');
    });
});
/*-----------------------------End admin route-------------------------------- */

//Common routes
Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
