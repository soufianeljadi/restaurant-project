<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Reservation;
use App\Models\Client;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function confirmed(Request $request)
    {

        $restaurant = Restaurant::find($request->id);
        return view('client.confirm', ['restaurant' => $restaurant]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function reservation()
    {
        //
        $restaurant = Auth::guard('restaurant')->user();
        $reservations = Reservation::with('client', 'table')
            ->whereHas('table', function ($query) use ($restaurant) {
                $query->where('restaurant_id', $restaurant->id);
            })
            ->get();
        return view('restaurant.reservations', compact('reservations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
