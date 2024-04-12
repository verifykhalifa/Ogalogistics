<?php

namespace App\Http\Controllers;
use App\Models\User;


use Illuminate\Http\Request;

class dashController extends Controller
{
    
    public function dashboard()
    {
        
        return view('dash');
       
    }

}
