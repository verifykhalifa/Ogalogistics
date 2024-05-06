<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    Protected $fillable = [
        'name',
        'phone',      
        'email',      
        'dob',        
        'invoice',    
        'product',    
        'unit'
    ];


    // public function retails(){

    //     return $this->hasMany('App/Models/Store');
    //  }
}
