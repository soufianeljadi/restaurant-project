<?php

namespace App\Http\Controllers;
use App\Models\Restaurant;
use App\Models\Table;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Database\QueryException;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('restaurant.tables')->with([
            "restaurants" => Restaurant::all(),
            "tables" => Table::all(),]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('restaurant.addtable');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            // dd($request->all());
    $table = Table::create([
        'number' => $request->number,
        'location' => $request->location,
        'status' => $request->status,
        'guest_number' => $request->guest_number,
        'restaurant_id' => $request->restaurant_id,
        'created_at' => Carbon::now(),
    ]);
    toastr()->success('Table enregistrées avec succès');
    return redirect()->route("restaurant.table.create");

        }  catch (QueryException $exception) {
            if ($exception->errorInfo[1] == 1062) {
                // Duplicate entry for 'number' column
                toastr()->error('Le numéro de la table est déjà utilisé.');
                return redirect()->back()->withInput();
            } else {
                // Handle other database errors
                toastr()->error('Erreur de base de données.');
                return redirect()->back()->withInput();
            }
        }
    }

    public function update(Request $request)
    {
        //
        try {
            $table = Table::find($request->id);
            $table->number = $request->number;
            $table->location = $request->location;
            $table->guest_number = $request->guest_number;
            $table->status = $request->status;

            // $restaurant->password = Hash::make($request->password);
            $table->save();
            toastr()->success('Table enregistrées avec succès');
            return redirect()->back();

        }catch (QueryException $exception) {
            if ($exception->errorInfo[1] == 1062) {
                // Duplicate entry for 'number' column
                toastr()->error('Le numéro de la table est déjà utilisé.');
                return redirect()->back()->withInput();
            } else {
                // Handle other database errors
                toastr()->error('Erreur de base de données.');
                return redirect()->back()->withInput();
            }
        }
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
