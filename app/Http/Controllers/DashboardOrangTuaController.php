<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardOrangTuaController extends Controller
{
    public function index(){
        return view('orangtua/dashboard');
    }
}
