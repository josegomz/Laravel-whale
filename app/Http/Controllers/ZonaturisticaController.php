<?php

namespace App\Http\Controllers;

use App\Zonaturistica;
use Illuminate\Http\Request;
use App\Http\Requests\StoreZonaturisticaRequest;

class ZonaturisticaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zonaturisticas= Zonaturistica::all();
        return view('zonaturistica.index',compact('zonaturisticas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);   
        return view('zonaturistica.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreZonaturisticaRequest $request)
    {
        $zonaturistica = new Zonaturistica();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/zonaturistica/',$name);
        }
        $zonaturistica->name = $request->input('name');
        $zonaturistica->location = $request->input('location');
        $zonaturistica->description = $request->input('description');
        $zonaturistica->image = $name;
        $zonaturistica->save();
        return redirect()->route('zonaturistica.index')->with('status','Lugar turistico creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Zonaturistica $zonaturistica)
    {
        return view('zonaturistica.show',compact('zonaturistica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Zonaturistica $zonaturistica,Request $request)
    {
        $request->user()->authorizeRoles(['admin']);   
        return view('zonaturistica.edit',compact('zonaturistica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zonaturistica $zonaturistica)
    {
        $zonaturistica->fill($request->except('image'));
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $zonaturistica->image=$name;
            $file->move(public_path().'/img/zonaturistica/',$name);
        }
        $zonaturistica->save();
        return redirect()->route('zonaturistica.index')->with('status','Lugar turistico editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zonaturistica $zonaturistica,Request $request)
    {
        $request->user()->authorizeRoles(['admin']);   
        $file_path = public_path().'/img/zonaturistica/'.$zonaturistica->image;
        \File::delete($file_path);
        $zonaturistica->delete();
        return redirect()->route('zonaturistica.index')->with('status','Lugar turistico eliminado correctamente');
    }
}
