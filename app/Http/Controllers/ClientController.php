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
    public function clients()
    {
        $clients = Client::all();
        return view("admin.clients_list", compact("clients"));
    }

    public function dashboard()
    {
        $restaurants = Restaurant::all();
        return view('client.index',compact("restaurants"));
    }
    public function profile()
    {
        return view('client.client_profile');
    }
    public function reservation()
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
    public function ClientRegister()
    {
        return view('client.client_register');
    }
    public function ClientRegisterCreate(Request $request)
    {
       // dd($request->all());
       $client = Client::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
       ]);
       Auth::guard("client")->login($client);
       toastr()->success('Données enregistrées avec succès');
        return redirect()->route("client.dashboard");


    }
    public function update (Request $request){

        $client = Client::find($request->id);
        $client->name = $request->name;
        $client->email = $request->email;
        // $client->password = Hash::make($request->password);
        $client->save();
        toastr()->success('Données enregistrées avec succès');
        return redirect()->route("client.profile");


    }
    public function destroy(Request $request)
    {
      $client = Client::findOrFail($request->id);
      $client ->delete();
      toastr()->error('Le client a été bien supprimé !'," ");
      return redirect()->route("Admin.clients");

    }
    public function logout()
    {
        Auth::guard('client')->logout();
        toastr()->info('Se déconnecter avec succès');
        return redirect('/');
    }
}

