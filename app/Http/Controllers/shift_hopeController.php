<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\shift_hope;

class shift_hopeController extends Controller
{
    public function index(shift_hope $shift_hope)
    {
        return $shift_hope->get();
    }
}

