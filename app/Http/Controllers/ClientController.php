<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Restaurant;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Table;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class ClientController extends Controller
{
    //
    public function login()
    {
        return view('client.login');
    }
    public function book(Request $request)
    {
        $restaurant = Restaurant::find($request->id);
        $tableCount = Table::whereHas('restaurant', function ($query) use ($restaurant) {
            $query->where('restaurant_id', $restaurant->id);
        })->count();
        // return $tableCount;
        // $restaurant = $restaurant->tables->where('status',"=",'Disponible')->groupBy('guest_number');
// return $restaurant;
        return view('client.reservation', ['restaurant' => $restaurant],compact('tableCount'));
    }

    public function reservations(Request $request)
    {
        $client = Auth::guard('client')->user();
        $reservations = Reservation::where('client_id', $client->id)->get();
        return view('client.mybooking', ['reservations' => $reservations]);
    }

    public function reserve(Request $request)
    {
        $table = Table::findOrFail($request->table_id);
        // $table->status = 'Indisponible';
        $existingReservation = Reservation::where('table_id', $table->id)
        ->where('reservation_date', $request->reservation_date)
        ->first();

    if ($existingReservation) {
        // Table is already reserved on the requested date, handle the error
        return redirect()->back()->with('error', 'La table est déjà réservée à cette date.');
    }
        $table->save();
        // $client = Client::findOrFail($request->client_id);
        $client = Client::findOrFail($request->client_id);
        $restaurant = Restaurant::findOrFail($request->restaurant_id);
        $client->yums = Auth::guard('client')->user()->yums + $restaurant->yums;
        $client->save();

        $reservation = Reservation::create([
            'client_id' => $request->client_id,
            'table_id' => $request->table_id,
            'reservation_tele' => $request->reservation_tele,
            'reservation_email' => $request->reservation_email,
            'reservation_date' => $request->reservation_date,
            'reservation_time' => $request->reservation_time,
            'created_at' => Carbon::now(),
        ]);
        $restaurant = Restaurant::find($request->restaurant_id);
        return redirect()->route('client.reservation.confirmed')->with(['restaurant' => $restaurant]);
    }
    public function clients()
    {
        $clients = Client::all();
        return view("admin.clients", compact("clients"));
    }

    public function dashboard()
    {
        $restaurants = Restaurant::all();
        return view('client.index', compact("restaurants"));
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

    public function connect(Request $request)
    {
        //dd($request->all());
        $check = $request->all();
        if (Auth::guard('client')->attempt(['email' => $check['email'], 'password' => $check['password']])) {
            toastr()->success('Connectez-vous avec succès');
            return redirect()->route('view_all');
        } else {
            toastr()->error('Email ou mot de passe invalide');
            return back();
        }
    }
    public function register()
    {
        return view('client.register');
    }
    public function create(Request $request)
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
        return redirect()->route('view_all');
    }
    public function update(Request $request)
    {

        $client = Client::find($request->id);
        $client->name = $request->name;
        $client->email = $request->email;
        // $client->password = Hash::make($request->password);
        $client->save();
        toastr()->success('Données enregistrées avec succès');
        return redirect()->back();
    }
    public function destroy(Request $request)
    {
        $client = Client::findOrFail($request->id);
        $client->delete();
        toastr()->error('Le client a été bien supprimé !', " ");
        return redirect()->route("Admin.clients");
    }
    public function logout()
    {
        Auth::guard('client')->logout();
        toastr()->info('Se déconnecter avec succès');
        return redirect('/');
    }
}
