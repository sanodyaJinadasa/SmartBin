<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use Illuminate\Support\Facades\Auth;



class DriverController extends Controller
{

public function dashboard()
{
    $driverId = Auth::id();

    $assignedBins = Bin::where('driver_id', $driverId)->count();

    $fullBins = Bin::where('driver_id', $driverId)
                   ->where('status', 3)
                   ->count();

    return view('driver.dashboard', compact('assignedBins', 'fullBins'));
}

public function bins()
{
    $bins = Bin::where('driver_id', Auth::id())->get();

    return view('driver.bins', compact('bins'));
}


public function updateStatus(Request $request, $id)
{
    $bin = Bin::findOrFail($id);

    $bin->status = $request->status;
    $bin->save();

    return back()->with('success', 'Status updated!');
}
}
