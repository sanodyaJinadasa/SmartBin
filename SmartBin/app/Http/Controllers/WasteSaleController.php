<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WasteSaleController extends Controller
{
    public function index()
    {
        $wastes = WasteSale::where('user_id', Auth::id())->latest()->get();
        return view('user.waste.index', compact('wastes'));
    }

    public function create()
    {
        return view('user.waste.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'quantity' => 'required|numeric',
            'mobile' => 'required',
            'image' => 'nullable|image'
        ]);

        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('waste', 'public');
        }

        WasteSale::create([
            'user_id' => Auth::id(),
            'type' => $request->type,
            'quantity' => $request->quantity,
            'mobile' => $request->mobile,
            'description' => $request->description,
            'address' => $request->address,
            'image' => $imagePath,
            'status' => 1
        ]);

        return redirect()->route('waste.index')->with('success', 'Waste added successfully!');
    }
}
