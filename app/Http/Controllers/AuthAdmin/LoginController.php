<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Admin;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function index()
    {
        return view('authadmin');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'username'     =>  'required',
            'password'  =>  'required|min:6',
        ]);

        $credential = [
            'username' =>  $request->username,
            'password'  =>  $request->password,
        ];
        if (Auth::guard('admin')->attempt($credential, $request->member)) {
            if (Auth::guard('admin')->user()->role == 'Admin' && Auth::guard('admin')->user()->status == 'true') {
                return redirect()->intended(route('admin.dashboard'));
            } elseif (Auth::guard('admin')->user()->role == 'Fakultas' && Auth::guard('admin')->user()->status == 'true') {
                return redirect()->intended(route('fakultas.dashboard'));
            }
            // elseif (Auth::guard('admin')->user()->role == 'Fakultas' && Auth::guard('admin')->user()->status == 'true') {
            //     return redirect()->intended(route('fakultas.dashboard'));
            // }
        }
        return redirect()->back()->withInput($request->only('username'))->with(['error' => 'Username atau Password Salah !']);
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/rumahku');
    }
}
