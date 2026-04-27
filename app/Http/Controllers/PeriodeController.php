<?php

namespace App\Http\Controllers;

use App\Models\periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $result = periode::all();
        // dd($result);
        return view('periode.index', compact('result'));
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {

    }

    public function show(periode $periode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(periode $periode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, periode $periode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(periode $periode)
    {
        //
    }
}
