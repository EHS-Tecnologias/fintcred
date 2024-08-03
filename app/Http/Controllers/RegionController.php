<?php

namespace App\Http\Controllers;

use App\Models\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['regiones']=Region::orderBy('id','desc')->paginate(5);
        return view('regiones.index',$data);
    }

    public function create(){
        return view('regiones.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|max:255',
        ]);
        Region::create($request->all());
        return redirect()->route('regiones.index')->with('success','Región creada correctamente.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $region=Region::find($id);
        return view('regiones.show',compact('region'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|max:255',
        ]);
        $region=Region::find($id);
        $region::update($request->all());
        return redirect()->route('regiones.index')->with('success','Región actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $region=Region::find($id);
        $region->delete();
        return redirect()->route('regiones.index')->with('success','Región eliminada correctamente.');
    }

    public function edit($id){
        $region=Region::find($id);
        return view('regiones.show',compact('region'));
    }
}
