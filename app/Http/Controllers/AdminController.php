<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('home.dashboard', [
            'title' => 'Dashboard',
        ]);
    }
}
