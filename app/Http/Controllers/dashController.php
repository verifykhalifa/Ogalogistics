<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class dashController extends Controller
{
    
    public function dashboard()
    {
        
            return view('customer.dash');
       
    }

    public function profile()
    {
        
            return view('customer.profile');
       
    }

    public function history()
    {
        
            return view('customer.history');
       
    }

    public function address()
    {
        
            return view('customer.address');
       
    }

}
