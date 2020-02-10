<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hotel;
use DB;

class ReservationController extends Controller
{
	public function index()
	{
		$hotels= Hotel::all();
        return view('hotel.reservation',compact('hotels'));
	}

	public function store(Request $request)
	{
		$hotel = new Hotel();
        $hotel->id = $request->input('id');
		$user = $request->user();
        $user->hotels()->attach($hotel);
		return redirect()->route('reservation.index')->with('status','Reservacion hecha correctamente');
	}

	public function list(Request $request){
		$user = $request->user();
		$list = DB::select('select name,location,services,image from hotel_user as hu inner join hotels as h on h.id=hu.hotel_id  where user_id='.$user->id);
		return view('hotel.myreservations',compact('list'));
	}
}