<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class driverController extends Controller
{
    public function driverdash()
    {
        
            return view('driver.dash');
       
    }
}
