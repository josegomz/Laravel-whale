<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Zonaturistica;


class VisitController extends Controller
{
	public function index()
	{
		$zonaturisticas= Zonaturistica::all();
        return view('zonaturistica.visit',compact('zonaturisticas'));
	}

	public function store(Request $request)
	{
		$zonaturistica = new Zonaturistica();
		$zonaturistica->id= $request->input('id');
		$user = $request->user();
		$user->zonaturisticas()->attach($zonaturistica);
		return redirect()->route('visit.index')->with('status','Reservacion hecha correctamente');
	}
}