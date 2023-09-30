<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftPatternController extends Controller
{
    public function Kind()
    {
        return $this->belongsTo(kind::class);
    }
    
    public function index(ShiftPattern $shift_hope)
    {
        return view('shift_hope.index')->with(['posts' => $shift_hope->getPaginateByLimit()]);
    }//
}
