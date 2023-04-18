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
    public function RestaurantProfile()
    {
        return view('restaurant.restaurant_profile');
    }
    public function ShowRestaurants()
    {
        $restaurants = Restaurant::all();
        return view("admin.restaurants_list", compact("restaurants"));
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
            toastr()->success('Connectez-vous avec succès');
            return redirect()->route('restaurant.dashboard');
        } else {
            toastr()->error('Email ou mot de passe invalide');
            return back();
        }
        //return view('restaurant.index');
    }
    public function Restaurantlogout()
    {
        Auth::guard('restaurant')->logout();
        toastr()->info('Se déconnecter avec succès');
        return redirect('/');
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
        'location' => $request->location,
        'description' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
       ]);
       toastr()->success('Données enregistrées avec succès');
        return redirect()->route("restaurant.dashboard");


    }
    public function destroy(Request $request)
    {
      $restaurant = Restaurant::findOrFail($request->id);
      $restaurant ->delete();
      toastr()->error('Le restaurant a été bien supprimé !'," ");
      return redirect()->route("Admin.restaurants");

    }
}
