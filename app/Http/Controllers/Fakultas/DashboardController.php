<?php

namespace App\Http\Controllers\Fakultas;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Gate;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        if (!Gate::allows('isFakultas')) {
            abort(403, 'Unauthorized action.');
        }
        return view('fakultas.dashboard.index');
    }
}
