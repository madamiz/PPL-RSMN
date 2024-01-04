<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Polyclinic;
use Illuminate\Database\Eloquent\Collection;

class PolyclinicController extends Controller
{
    public function home()
    {
        $polyclinics = Polyclinic::get();
        
        
        return view('home', compact('polyclinics'));
    }
}
