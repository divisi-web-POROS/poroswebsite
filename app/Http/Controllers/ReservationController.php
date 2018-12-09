<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
    	$reservations = Reservation::all();
    	return view('contents.rent-schedule', compact('reservations'));
    }
}
