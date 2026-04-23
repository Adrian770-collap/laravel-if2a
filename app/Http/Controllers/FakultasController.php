<?php

namespace App\Http\Controllers;

use App\Models\fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    public function index()
    {
        $result = Fakultas::all();
        // dd($result);
        return view('fakultas.index', compact('result'));
    }
    public function create()
    {
     
    }

    public function store(Request $request)
    {

    }

    public function show(fakultas $fakultas)
    {

    }

    public function edit(fakultas $fakultas)
    {
        
    }

    public function update(Request $request, fakultas $fakultas)
    {
        
    }
 
    public function destroy(fakultas $fakultas)
    {
        
    }
}
