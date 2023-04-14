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
}

