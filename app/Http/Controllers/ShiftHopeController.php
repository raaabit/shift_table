<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShiftHope;

class ShiftHopeController extends Controller
{
    public function index(ShiftHope $shiftHope)
    {
        return view('shift_hope.index')->with(['posts' => $shiftHope->getPaginateByLimit()]);
    }
    
    public function show(ShiftHope $post)
    {
        return view('shift_check.show')->with(['post' => $post]);
 //'post'はbladeファイルで使う変数。中身は$postはid=1のPostインスタンス。
    }
}

