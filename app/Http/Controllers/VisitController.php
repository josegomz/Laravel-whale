<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Zonaturistica;
use DB;

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
		return redirect()->route('visit.index')->with('status','Visita hecha correctamente');
	}

	public function list(Request $request){
		$user = $request->user();
		$list = DB::select('select name,location,description,image from user_zonaturistica as uz inner join zonaturisticas as z on z.id=uz.zonaturistica_id  where user_id='.$user->id);
		return view('zonaturistica.myvisits',compact('list'));
	}
}