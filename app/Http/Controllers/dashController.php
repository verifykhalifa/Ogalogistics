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
        
        return view('JointDashboard.dash');
    }

}
