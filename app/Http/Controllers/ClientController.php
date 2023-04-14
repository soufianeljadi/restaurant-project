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

    public function ClientDashboard()
    {
        return view('client.index');
    }
    public function ClientReservation()
    {
        return view('client.reservation');
    }

    public function ClientLogin(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if (Auth::guard('client')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('client.dashboard')->with('error', 'Connectez-vous avec succès');
        } else {
            return back()->with('error', 'Email ou mot de passe invalide');
        }
        //return view('restaurant.index');
    }
    public function Clientlogout()
    {
        Auth::guard('client')->logout();
        return redirect()->route('home')->with('logout', 'Se déconnecter avec succès');
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
        return redirect()->route("client.dashboard");


    }
}

