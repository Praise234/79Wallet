<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $user = \Auth::user();
    return view('dashboard', compact('user'));
    }
    
}
