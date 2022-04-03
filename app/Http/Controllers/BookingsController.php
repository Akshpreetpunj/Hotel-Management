<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    public function index(){
        /*$bookings = DB::table('bookings')
                    ->join('rooms', 'bookings.room_number', '=', 'rooms.id')
                    ->select('bookings.id', 'bookings.room_number', 'rooms.room_name', 'bookings.guest_name', 'date')
                    ->get();*/
        $bookings = Booking::all();
        return view('bookings.index')->with('bookings', $bookings);
    }
}
