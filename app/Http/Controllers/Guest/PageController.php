<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
  

    public function index()
    {
        $today = date('Y-m-d');
        $trains = Train::where('data_treno', '=', $today)->get();
        return view('home', compact('trains', 'today'));
    }
}
