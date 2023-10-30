<?php

namespace App\Http\Controllers;

use App\Models\Shark;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SharkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all the sharks
        $sharks = Shark::all();

        // load the view pass the sharks
        return view('sharks.index', [
            'sharks' => $sharks
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sharks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'shark_level' => 'required|numeric'
        ]);

        Shark::create($validated);

        return redirect('sharks')->with('success', 'Data has been saved');
    }

    /**
     * Display the specified resource.
     */
    public function show(Shark $shark)
    {
        return view('sharks.show', [
            'shark' => $shark
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Shark $shark)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Shark $shark)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Shark $shark)
    {
        //
    }
}
