<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index()
{
    // Retourne une la vue dashboard
    return view('pages.dashboard');
}

}
