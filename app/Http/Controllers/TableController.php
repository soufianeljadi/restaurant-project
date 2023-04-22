<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function RestaurantTableCreate()
    {
        return view('restaurant.table_create');
    }

    public function RestaurantTables(Request $request)
    {
        // $restaurant = Restaurant::find($id);
        // dd($request->id);
        // if (!$restaurant) {
        //     return abort(404);
        // }
        // $tables = $restaurant->tables;
        return view('restaurant.restaurant_tables')->with([
            "restaurants" => Restaurant::all(),
            "tables" => Table::all(),]);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function RestaurantTableStore(Request $request)
    {
                // dd($request->all());
        $table = Table::create([
            'number' => $request->number,
            'location' => $request->location,
            'guest_number' => $request->guest_number,
            'restaurant_id' => $request->restaurant_id,
            'created_at' => Carbon::now(),
        ]);
        toastr()->success('Table enregistrées avec succès');
        return redirect()->route("restaurant.table.create");
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
    public function destroy(Request $request)
    {
        $table = Table::findOrFail($request->id);
        $table->delete();
        toastr()->error('la table a été bien supprimé !', " ");
        return redirect()->route("restaurant.tables");
    }
}
