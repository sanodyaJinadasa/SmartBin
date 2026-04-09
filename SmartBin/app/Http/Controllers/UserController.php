<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
     public function dashboard()
    {
        return view('user.dashboard');
    }

    public function bins()
    {
        return view('user.bins');
    }

    public function createBin()
    {
        return view('user.create-bin');
    }

    public function storeBin(Request $request)
    {
        // will implement later
        return redirect()->route('bins');
    }
}
