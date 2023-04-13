<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
USE App\Models\Restaurant;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class RestaurantController extends Controller
{
    //
    public function RestaurantIndex()
    {
        return view('restaurant.restaurant_login');
    }
    public function RestaurantDashboard()
    {
        return view('restaurant.index');
    }

    public function RestaurantLogin(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if (Auth::guard('restaurant')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('restaurant.dashboard')->with('error', 'Connectez-vous avec succès');
        } else {
            return back()->with('error', 'Email ou mot de passe invalide');
        }
        //return view('restaurant.index');
    }
    public function Restaurantlogout()
    {
        Auth::guard('restaurant')->logout();
        return redirect()->route('home')->with('logout', 'Se déconnecter avec succès');
    }
    public function RestaurantRegister()
    {
        return view('restaurant.restaurant_register');
    }
    public function RestaurantRegisterCreate(Request $request)
    {
       // dd($request->all());
       Restaurant::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
       ]);
        return redirect()->route("restaurant.dashboard");


    }
}
