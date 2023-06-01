<?php

namespace App\Http\Controllers;

use App\Models\infirmier;
use Illuminate\Http\Request;

class InfirmierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('infirmier.index-infirmier');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(infirmier $infirmier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(infirmier $infirmier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, infirmier $infirmier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(infirmier $infirmier)
    {
        //
    }
}
