<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function store(Request $request)
    {
        $title = 'Pengguna';

        return view('home', compact('title'));
    }
}
