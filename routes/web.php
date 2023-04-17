<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
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

    Route::get('/login', [RestaurantController::class, 'RestaurantIndex'])->name('login_form');
    Route::post('/login/owner', [RestaurantController::class, 'RestaurantLogin'])->name('restaurant.login');
    Route::get('/dashboard', [RestaurantController::class, 'RestaurantDashboard'])->name('restaurant.dashboard')->Middleware('Restaurant');
    Route::get('/logout', [RestaurantController::class, 'Restaurantlogout'])->name('restaurant.logout')->Middleware('Restaurant');
    Route::get('/register', [RestaurantController::class, 'RestaurantRegister'])->name('restaurant.register');
    Route::post('/register/create', [RestaurantController::class, 'RestaurantRegisterCreate'])->name('restaurant.register.create');
    Route::get('/profile', [RestaurantController::class, 'RestaurantProfile'])->name('restaurant.profile');
});

/*-----------------------------End Restaurant route----------------------------- */

/*------------------------------Client route----------------------------------- */
Route::prefix('client')->group(function () {

    Route::get('/reservation', [ClientController::class, 'ClientReservation'])->name('client.reservation')->Middleware('Client');
    Route::get('/login', [ClientController::class, 'ClientIndex'])->name('client_login_form');
    Route::post('/login/owner', [ClientController::class, 'ClientLogin'])->name('client.login');
    Route::get('/dashboard', [ClientController::class, 'ClientDashboard'])->name('client.dashboard')->Middleware('Client');
    Route::get('/logout', [ClientController::class, 'Clientlogout'])->name('client.logout')->Middleware('Client');
    Route::get('/register', [ClientController::class, 'ClientRegister'])->name('client.register');
    Route::post('/register/create', [ClientController::class, 'ClientRegisterCreate'])->name('client.register.create');
    Route::get('/profile', [ClientController::class, 'ClientProfile'])->name('client.profile');

});
/*-----------------------------End Client route-------------------------------- */

Route::prefix('admin')->group(function () {

    Route::get('/login', [AdminController::class, 'AdminIndex'])->name('admin_login_form');
    Route::post('/login/owner', [AdminController::class, 'AdminLogin'])->name('admin.login');
    Route::get('/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard')->Middleware('Admin');
    Route::get('/logout', [AdminController::class, 'Adminlogout'])->name('admin.logout')->Middleware('Admin');
    Route::get('/register', [AdminController::class, 'Adminregister'])->name('admin.register');
    Route::post('/register/create', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');
    Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');



    Route::get('/restaurants', [RestaurantController::class, 'AdminShow'])->name('Admin.restaurants');
    Route::get('/destroy-restaurant/{id}', [RestaurantController::class, 'destroy'])->name('restaurant.delete');
});
/*-----------------------------End Client route-------------------------------- */


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
