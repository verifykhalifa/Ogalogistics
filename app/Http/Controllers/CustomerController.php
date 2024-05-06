<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use GuzzleHttp\Client;

class CustomerController extends Controller
{
    // Controller method to handle estimating taxi fare
public function calculateRoute(Request $request)
{
    dd($request->all());
    
    // Get pickup and drop-off locations from user input
    $pickup = $request->input('pickup');
    $dropoff = $request->input('dropoff');

    // Call Google Maps API to calculate distance and time
    $distance = $this->calculateDistance($pickup, $dropoff);
    $time = $this->calculateTime($pickup, $dropoff);

    // Apply pricing algorithm to calculate fare
    $fare = $this->calculateFare($distance, $time);

    // Return the estimated fare to the user
    return response()->json(['fare' => $fare]);
}

// Function to calculate distance using Google Maps API
private function calculateDistance($pickup, $dropoff)
{
    // Make API call to get distance between pickup and drop-off locations
    // Example: Use Google Maps Distance Matrix API
    // $distance = ...; 

    $client = new Client();

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
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
