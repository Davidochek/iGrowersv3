<?php

namespace App\Http\Controllers;

use App\Models\Farmer;
use Illuminate\Http\Request;

class FarmerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

     public function registerfarms()
    {
        $farmers = Farmer::all();
        return view('admins.register-farms', compact('farmers'));

    }

      public function previewfarmer($id)
    {
        $farmer = Farmer::find($id);
        return $farmer;

    }


      public function updatefarmer(Request $request, $id)
    {
        $id = $request['id'];
        $farmer = Farmer::find($id);
        $farmer->fields()->create([
        'farmer_id' => $id,
        'farmsize' => $request['farmsize'],
        'fwithhomestead' => $request['fwithhomestead'],
        'farmanimals' => $request['farmanimals'],
        'farmblocks' => $request['farmblocks'],
        'farmblocks' => $request['farmblocks'],
        'farmblocksno' => $request['farmblocksno'],
        'farmcertifications' => $request['farmcertifications'],
        'farmownership' => $request['farmownership'],
        'farmanimalsno' => $request['farmanimalsno'],
        'fmaincrop' => $request['fmaincrop'],
        'fothercrop' => $request['fothercrop'],
        'farmtransport' => $request['farmtransport'],        
       ]);
        return response()->json(['success'=>'Field is successfully added']);
        

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
       $farmer =  Farmer::create($request->all());
       $farmer->fields()->create($request->all());
        return redirect('admin/register-farmer')->with('success', 'Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function show(Farmer $farmer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmer $farmer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmer $farmer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Farmer  $farmer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmer $farmer)
    {
        //
    }
}
