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
        $restaurants = Restaurant::all();
        return view("restaurant.restaurant_profile", compact("restaurants"));
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
        'description' => $request->description,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
       ]);
       toastr()->success('Données enregistrées avec succès');
        return redirect()->route("restaurant.dashboard");


    }
    public function RestaurantEdit (Request $request){

        $restaurant = Restaurant::find($request->id);
        $restaurant->name = $request->name;
        $restaurant->email = $request->email;
        $restaurant->location = $request->location;
        $restaurant->description = $request->description;
        // $restaurant->password = Hash::make($request->password);
        $restaurant->save();
           toastr()->success('Données enregistrées avec succès');
            return redirect()->route("restaurant.profile");


    }
    public function destroy(Request $request)
    {
      $restaurant = Restaurant::findOrFail($request->id);
      $restaurant ->delete();
      toastr()->error('Le restaurant a été bien supprimé !'," ");
      return redirect()->route("Admin.restaurants");

    }
}
