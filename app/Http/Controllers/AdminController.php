<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\Client;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{
    //
    public function AdminIndex()
    {
        return view('admin.admin_login');
    }
    public function AdminDashboard()
    {
        return view('admin.index');
    }

    public function AdminLogin(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if (Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            return redirect()->route('admin.dashboard')->with('error', 'Connectez-vous avec succès');
        } else {
            return back()->with('error', 'Email ou mot de passe invalide');
        }
        //return view('restaurant.index');
    }
    public function Adminlogout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('home')->with('logout', 'Se déconnecter avec succès');
    }
    public function AdminRegister()
    {
        return view('admin.admin_register');
    }
    public function AdminRegisterCreate(Request $request)
    {
       // dd($request->all());
       Admin::insert([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'created_at' => Carbon::now(),
       ]);
        return redirect()->route("admin.dashboard");


    }
}

