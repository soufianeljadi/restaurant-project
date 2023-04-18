<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\Client;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ClientController extends Controller
{
    //
    public function ClientIndex()
    {
        return view('client.client_login');
    }
    public function ShowClients()
    {
        $clients = Client::all();
        return view("admin.clients_list", compact("clients"));
    }

    public function ClientDashboard()
    {
        $restaurants = Restaurant::all();
        return view('client.index',compact("restaurants"));
    }
    public function ClientProfile()
    {
        return view('client.client_profile');
    }
    public function ClientReservation()
    {
        $restaurants = restaurant::all();
        return view('client.reservation')->with([
            "restaurants" => $restaurants,
          ]);
    }

    public function ClientLogin(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if (Auth::guard('client')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            toastr()->success('Connectez-vous avec succès');
            return redirect()->route('client.dashboard');
        } else {
            toastr()->error('Email ou mot de passe invalide');
            return back();
        }
        //return view('restaurant.index');
    }
    public function Clientlogout()
    {
        Auth::guard('client')->logout();
        toastr()->info('Se déconnecter avec succès');
        return redirect('/');
    }
    public function ClientRegister()
    {
        return view('client.client_register');
    }
    public function ClientRegisterCreate(Request $request)
    {
       // dd($request->all());
       Client::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
       ]);
       toastr()->success('Données enregistrées avec succès');
        return redirect()->route("client.dashboard");


    }
    public function destroy(Request $request)
    {
      $client = Client::findOrFail($request->id);
      $client ->delete();
      toastr()->error('Le client a été bien supprimé !'," ");
      return redirect()->route("Admin.clients");

    }
}

