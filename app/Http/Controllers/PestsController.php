<?php

namespace App\Http\Controllers;

use App\Models\Pests;
use App\Models\Pesticide;
use App\Models\Crop;
use DB;
use Illuminate\Http\Request;

class PestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $crops = Crop::with('pesticides')->get();
        $crops = DB::table('crops')->get();
        return view('crops.pests', compact('crops'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function show(Pests $pests)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function edit(Pests $pests)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pests $pests)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pests  $pests
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pests $pests)
    {
        //
    }
}
