<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Estimate;
use GuzzleHttp\Client;
use Auth;

class CustomerController extends Controller
{

    public function requestRide(Request $request)
    {
    $data = [
        'origin'          => $request->origin,
        'destination'     => $request->destination,
        'trip_distance'   => $request->trip_distance,
        'trip_time'       => $request->trip_time,
        'trip_cost'       => $request->trip_cost,
        'user_id'         => $request->user_id
    ];

    //dd($data);

    $trip = Customer::create($data);

    return back();

    // return view('rate.view')->with('rates', $rates);
    }

<<<<<<< HEAD
=======
    $response = $client->get('https://api.distancematrix.ai/maps/api/distancematrix/json?origins=$pickup&destinations=$dropoff&key=0pUP5m4UWRvhPgWKZ9jfdxHsrm2YpBqV5RR56gldhAnuCVvKq9npxlSYGk2ClB2E');

    $body = $response->getBody();
    $contents = $body->getContents();

    // Process the response data
    return $contents;

}

// Function to calculate estimated time using Google Maps API
private function calculateTime($pickup, $dropoff)
{
    // Make API call to get estimated time for journey
    // Example: Use Google Maps Directions API
    // $time = ...;

    return $time;
}

// Function to calculate fare based on distance, time, and pricing algorithm
private function calculateFare($distance, $time)
{
    // Example pricing algorithm (simplified)
    $baseFare = 3.00; // Base fare
    $perMileRate = 2.00; // Per mile rate
    $perMinuteRate = 0.50; // Per minute rate

    $fare = $baseFare + ($perMileRate * $distance) + ($perMinuteRate * $time);

    return $fare;
}

    /**
     * Display a listing of the resource.
     */
>>>>>>> b0a17bbca8ce4f59fdaebca143b4085dc73beb00
    public function index()
    {
        $estimate = Estimate::all();
        
        return view('admin.estimate')->with('estimate', $estimate);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $estimate = Estimate::findorfail($id)->first();
        return view('admin.editEstimate')->with('estimate', $estimate);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $data = $request->except(['_method','_token']);

        $trip = Estimate::findorfail($id)->first();

        $trip->update($data);

        return back();
    }

    public function fetch()
    {
        $estimate = Estimate::all();

        $baseFare = $estimate[0]['baseFare'];
        $ratePerKm = $estimate[0]['ratePerKm'];

        // Return base fare and rate per kilometer as JSON response
        return response()->json([
            'base_fare' => $baseFare,
            'rate_per_km' => $ratePerKm,
        ]);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
