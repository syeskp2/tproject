<?php

namespace App\Http\Controllers;

use App\Models\Testapi;
use Illuminate\Http\Request;

class TestapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return "hi";
        return response()->json([
            'posts' => Testapi::get()
        ]);
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
    public function show(Testapi $testapi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Testapi $testapi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testapi $testapi)
    {
        //
    }
}
