<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bin;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
   
public function dashboard()
{
    $adminId = Auth::id();

    $assignedBins = Bin::where('admin_id', $adminId)->count();

    $fullBins = Bin::where('admin_id', $adminId)
                   ->where('status', 3)
                   ->count();

    return view('admin.dashboard', compact('assignedBins', 'fullBins'));
}

public function bins()
{
    $bins = Bin::where('admin_id', Auth::id())->get();

    return view('admin.bins', compact('bins'));
}


public function updateStatus(Request $request, $id)
{
    $bin = Bin::findOrFail($id);

    $bin->status = $request->status;
    $bin->save();

    return back()->with('success', 'Status updated!');
}
}
