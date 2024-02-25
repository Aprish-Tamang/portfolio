<?php

namespace App\Http\Controllers;

use App\Models\Nami;
use Illuminate\Http\Request;

class NamiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $namis=nami::all();
        return view('namis.index', compact('namis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $namis=nami::all();
        return view('namis.create', compact('namis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Nami $nami)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nami $nami)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nami $nami)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nami $nami)
    {
        //
    }
}
