<?php

namespace App\Http\Controllers;
use App\Models\Bin;
use Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{


    public function dashboard()
{
    $userId = Auth::id();

    $totalBins = Bin::where('user_id', $userId)->count();

    $fullBins = Bin::where('user_id', $userId)
                   ->where('status', 3)
                   ->count();

    $halfBins = Bin::where('user_id', $userId)
                   ->where('status', 2)
                   ->count();

    $emptyBins = Bin::where('user_id', $userId)
                    ->where('status', 1)
                    ->count();

    return view('user.dashboard', compact(
        'totalBins',
        'fullBins',
        'halfBins',
        'emptyBins'
    ));
}

    public function bins()
{
    $bins = Bin::where('user_id', Auth::id())->latest()->get();

    return view('user.bins', compact('bins'));
}

    public function createBin()
    {
        return view('user.create-bin');
    }


    public function storeBin(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        Bin::create([
            'type' => $request->type,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
           'address' => $request->address ?? 'N/A',
            'status' => '1',
            'user_id' => Auth::id()
        ]);

        return redirect()->route('bins')->with('success', 'Bin added successfully!');
    }
}
