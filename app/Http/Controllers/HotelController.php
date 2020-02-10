<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;
use App\Http\Requests\StoreHotelRequest;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $hotels= Hotel::all();        
        return view('hotel.index',compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request->user()->authorizeRoles(['admin']);   
        return view('hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelRequest $request)
    {
        $hotel = new Hotel();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/img/hotel/',$name);
        }
        $hotel->name = $request->input('name');
        $hotel->services = $request->input('services');
        $hotel->location = $request->input('location');
        $hotel->price = $request->input('price');
        $hotel->image = $name;
        $hotel->save();
        return redirect()->route('hotel.index')->with('status','Hotel creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('hotel.show',compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel,Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        return view('hotel.edit',compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Hotel $hotel)
    {
        $hotel->fill($request->except('image'));
        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $hotel->image=$name;
            $file->move(public_path().'/img/hotel/',$name);
        }
        $hotel->save();
        return redirect()->route('hotel.index')->with('status','Hotel editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel,Request $request)
    {
        $request->user()->authorizeRoles(['admin']);
        $file_path = public_path().'/img/hotel/'.$hotel->image;
        \File::delete($file_path);
        $hotel->delete();
        return redirect()->route('hotel.index')->with('status','Hotel eliminado correctamente');
    }
}
