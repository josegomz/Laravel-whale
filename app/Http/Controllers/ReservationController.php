<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hotel;

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
}