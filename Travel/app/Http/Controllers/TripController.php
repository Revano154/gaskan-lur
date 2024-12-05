<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('trips.index', compact('trips'));
    }

    public function create()
    {
        return view('trips.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'destination' => 'required',
            'description' => 'required',
            'price'       => 'required|numeric',
            'duration'    => 'required|integer',
        ]);

        Trip::create($request->all());
        return redirect()->route('trips.index');
    }

    public function edit($id)
    {
        $trip = Trip::findOrFail($id);
        return view('trips.edit', compact('trip'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'destination' => 'required',
            'description' => 'required',
            'price'       => 'required|numeric',
            'duration'    => 'required|integer',
        ]);

        $trip = Trip::findOrFail($id);
        $trip->update($request->all());
        return redirect()->route('trips.index');
    }

    public function destroy($id)
    {
        $trip = Trip::findOrFail($id);
        $trip->delete();
        return redirect()->route('trips.index');
    }
}
