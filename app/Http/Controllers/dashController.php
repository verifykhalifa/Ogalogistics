<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;


use Illuminate\Http\Request;

class dashController extends Controller
{
    
    public function dashboard()
    {
        if(auth()->User()->hasRole('admin'))
        {
            return view('admin.dash');
        }
        // return view('customer.dash');
        return view('JointDashboard.dash');
    }

    public function trackorder()
    {
        return view('customer.trackorder');
    }

    public function orderhistory()
    {
        return view('customer.orderhistory');
    }

}
