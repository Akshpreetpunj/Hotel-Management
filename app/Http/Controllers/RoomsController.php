<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;

class RoomsController extends Controller
{
    public function index(){
        $rooms = Room::all();
        return view('rooms.index')->with('rooms', $rooms);
    }

    public function create(){
        return view('rooms.create');
    }

    /*public function store(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'room_name' => 'required',
            'room_description' => 'required',
            'max_occupancy' => 'required',
        ]);

        $room = new Room;
        $room->id = $request->input('id');
        return redirect('/rooms')->with('success', 'Room Created');
    }*/
}
