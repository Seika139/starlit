<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MusicTableController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from music');
        return view('musictable', ['items'=>$items]);
    }
}
