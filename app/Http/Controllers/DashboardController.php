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


    public function showProfile()
    {
        $user = \Auth::user();
    return view('profile', compact('user'));
    }
    



    public function showAllTransactions()
    {
        $user = \Auth::user();
    return view('all-transactions', compact('user'));
    }
}
