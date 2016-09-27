<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        return view('pages.home');
    }

    public function howitworks(){
        return view('pages.how-it-works');
    }

    public function history(){
        return view('pages.history');
    }
}
