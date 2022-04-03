<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use App\Models\Room;
use Illuminate\Support\Facades\DB;

class BookingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$bookings = DB::table('bookings')
                    ->join('rooms', 'bookings.room_number', '=', 'rooms.id')
                    ->select('bookings.room_number', 'rooms.room_name', 'bookings.guest_name', 'date', 'bookings.id')
                    ->get();*/
        $bookings = Booking::all();

        return view('bookings.index')->with('bookings', $bookings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bookings.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $bookings = new Booking;
            $bookings->room_number = $request->input('room_number');
            $bookings->guest_name = $request->input('guest_name');
            $bookings->date = $request->input('date');
            $bookings->save();
    
            return redirect('/bookings')->with('success', 'Booking Created');
        }catch (\Illuminate\Database\QueryException $ex){
            return redirect('/bookings')->with('error', 'Room Number does not exit.');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Booking  $booking
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booking = Booking::find($id);
        $booking->delete();
        return redirect('/bookings')->with('success', 'Booking successfully deleted');
    }
}
