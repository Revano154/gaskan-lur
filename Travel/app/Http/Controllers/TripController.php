<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::getAllTrips();
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

        Trip::createTrip($request->all());
        return redirect()->route('trips.index');
    }

    public function edit($id)
    {
        $trip = Trip::findTripById($id);
        if (!$trip) {
            abort(404);
        }
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

        Trip::updateTrip($id, $request->all());
        return redirect()->route('trips.index');
    }

    public function destroy($id)
    {
        Trip::deleteTrip($id);
        return redirect()->route('trips.index');
    }
}
