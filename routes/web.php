<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TableController;
use GuzzleHttp\Middleware;
use App\Models\Restaurant;


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

/*-----------------------------Restaurant routes--------------------------------- */

Route::prefix('restaurant')->group(function () {
    Route::get('/info', [RestaurantController::class, 'info'])->name('info');
    //Auth ROUTES
    Route::get('/login', [RestaurantController::class, 'login'])->name('login_form');
    Route::post('/connect', [RestaurantController::class, 'connect'])->name('restaurant.login');
    Route::get('/register', [RestaurantController::class, 'register'])->name('restaurant.register');
    Route::post('/create', [RestaurantController::class, 'create'])->name('restaurant.register.create');
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
        Route::post('/update-table', [TableController::class, 'update'])->name('table.update');
        Route::post('/destroy-table', [TableController::class, 'destroy'])->name('table.delete');
    });
});

/*-----------------------------End Restaurant routes----------------------------- */

/*------------------------------Client routes----------------------------------- */
Route::prefix('client')->group(function () {
    //Auth ROUTES
    Route::get('/login', [ClientController::class, 'login'])->name('client_login_form');
    Route::post('/connect', [ClientController::class, 'connect'])->name('client.login');
    Route::get('/register', [ClientController::class, 'register'])->name('client.register');
    Route::post('/create', [ClientController::class, 'create'])->name('client.register.create');
    //middleware ROUTES
    Route::middleware(['Client'])->group(function () {

        Route::get('/logout', [ClientController::class, 'logout'])->name('client.logout');
        Route::get('/dashboard', [ClientController::class, 'dashboard'])->name('client.dashboard');
        Route::get('/profile', [ClientController::class, 'profile'])->name('client.profile');
        Route::post('/update', [ClientController::class, 'update'])->name('client.update');
        Route::get('/reservation', [ClientController::class, 'reservation'])->name('client.reservation');
    });
});
/*-----------------------------End Client routes-------------------------------- */

/*------------------------------admin routes----------------------------------- */
Route::prefix('admin')->group(function () {
    //Auth ROUTES
    Route::get('/login', [AdminController::class, 'login'])->name('admin_login_form');
    Route::post('/connect', [AdminController::class, 'connect'])->name('admin.login');
    Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/create', [AdminController::class, 'create'])->name('admin.register.create');
    //middleware ROUTES
    Route::middleware(['Admin'])->group(function () {

        Route::get('/logout', [AdminController::class, 'logout'])->name('admin.logout');
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
        //manage restaurants
        Route::get('/restaurants', [RestaurantController::class, 'restaurants'])->name('Admin.restaurants');
        Route::post('/update-restaurant', [RestaurantController::class, 'update'])->name('restaurant.update');
        Route::post('/destroy-restaurant', [RestaurantController::class, 'destroy'])->name('restaurant.delete');
        //manage clients
        Route::get('/clients', [ClientController::class, 'clients'])->name('Admin.clients');
        Route::post('/update-client', [ClientController::class, 'update'])->name('client.update');
        Route::post('/destroy-client', [ClientController::class, 'destroy'])->name('client.delete');
    });
});
/*-----------------------------End admin routes-------------------------------- */

//Common routes
Route::get('/', function () {
    $restaurants = Restaurant::all();
    return view('index', compact("restaurants"));
});

Route::get('/restaurants', function () {
    $nbr_resto = Restaurant::count();
    $restaurants = Restaurant::all();
    return view('view_all', compact("restaurants","nbr_resto" ));
})->name('view_all');



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__ . '/auth.php';
