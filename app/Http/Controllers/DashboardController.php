<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        return view('dashboard.home');
    }

    public function billing(){
        return view('dashboard.billing');
    }

    public function organization(){
        return view('dashboard.organization');
    }

    public function user(){
        return view('dashboard.user-management');
    }
}
//