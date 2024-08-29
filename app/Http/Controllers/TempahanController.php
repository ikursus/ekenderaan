<?php

namespace App\Http\Controllers;

use App\Models\Tempahan;
use Illuminate\Http\Request;

class TempahanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('tempahan.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tempahan.create');
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
    public function show(Tempahan $tempahan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tempahan $tempahan)
    {
        return view('tempahan.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tempahan $tempahan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tempahan $tempahan)
    {
        //
    }
}
