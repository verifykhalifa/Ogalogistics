<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;


use Illuminate\Http\Request;

class dashController extends Controller
{
    
    public function dashboard()
    {
        if(auth()->User()->hasRole('admin') || auth()->User()->hasRole('partners'))
        {
            return view('admin.dash');
        }

        return view('JointDashboard.dash');
       
    }

}
