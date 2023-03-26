<?php

namespace App\Http\Controllers;

use App\Models\Superheroe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SuperheroeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosSuperheroe['superheroes'] = Superheroe::paginate(15);
        return view('Superheroe.index', $datosSuperheroe);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('Superheroe.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosSuperheroe = request()->except('_token');

        if($request->hasFile('FotoURL'))
        {
            $datosSuperheroe['FotoURL']=$request->file('FotoURL')->store('uploads','public');
        }

        Superheroe::insert($datosSuperheroe);
        //return response() -> json($datosSuperheroe);
        return redirect('Superheroe')->with('mensaje', 'Nuevo Superheroe agregado con exito!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Superheroe $superheroe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $superheroe=Superheroe::findOrFail($id);
        return view('Superheroe.edit',compact('superheroe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosSuperheroe = request()->except(['_token', '_method']);
        

        if($request->hasFile('FotoURL'))
        {
            $superheroe=Superheroe::findOrFail($id);
            Storage::delete('public/'.$superheroe->FotoURL);
            $datosSuperheroe['FotoURL']=$request->file('FotoURL')->store('uploads','public');
        }

        Superheroe::where('id','=',$id)->update($datosSuperheroe);
        $superheroe=Superheroe::findOrFail($id);
        return view('Superheroe.edit',compact('superheroe'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $superheroe=Superheroe::findOrFail($id);

        if(Storage::delete('public/'.$superheroe->FotoURL))
        {
            Superheroe::destroy($id);
        }

        return redirect('Superheroe')->with('mensaje', 'Superheroe borrado con exito!!');
    }
}
