<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayController extends Controller
{
    public function index(Request $request) {
        $date = $request->query('date', date('Ymd'));
        return view('day', compact('date'));
    }
}
