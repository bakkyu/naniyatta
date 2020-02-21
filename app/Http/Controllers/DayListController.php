<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DayListController extends Controller
{
    public function index() {
        return view('day_list');
    }
}
