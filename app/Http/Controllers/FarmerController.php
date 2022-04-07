<?php

namespace App\Http\Controllers;

use App\Models\Crop;
use App\Models\Farmer;
use Illuminate\Http\Request;
use DB;

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

     public function registercrops()
    {
        $farmers = Farmer::with('fields')->get();
        return view('admins.register-crop', compact('farmers'));

    }

      public function previewfarmer($id)
    {
        $farmer = Farmer::with('fields')->find($id);
        return $farmer;

    }

        public function addharvest()
    {
        $crops = Crop::with('fields')->get();
        return view('admins.add-harvest', compact('crops'));

    }

    public function chart(){
        $farmers = Farmer::with('fields')->get();
        $post = DB::table('crop')->get('*')->toArray();
      foreach($post as $row)
       {
          $data[] = array
           (
            'label'=>$row->crop,
            'y'=>$row->expectedvolume
           ); 
       }
      // return view('statics',['data' => $data]);
        return view('admins.home', ['data' => $data, 'farmers' => $farmers]);
    }

    // public function farmerinfo(){
    //     $farmers = Farmer::with('fields')->get()
    //     return view('admins.home', compact('farmers'))
    // }

      public function updatefarmer(Request $request, $id)
    {
        $id = $request['id'];
        $farmer = Farmer::find($id);
        $farmer->fields()->create([
        'farmer_id' => $id,
        'fieldname' => $request['fieldname'],
        'farmsize' => $request['farmsize'],
        'fmaincrop' => $request['fmaincrop'],
        'fothercrop' => $request['fothercrop'],      
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
        // $farmer = $request->all();
        // dd($farmer);
       $farmer =  Farmer::create($request->all());
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
