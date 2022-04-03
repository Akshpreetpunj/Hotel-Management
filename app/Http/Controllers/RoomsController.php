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

    public function store(Request $request){
        $this->validate($request, [
            'id' => 'required',
            'room_name' => 'required',
            'room_description' => 'required',
            'max_occupancy' => 'required',
        ]);

        $room = new Room;
        $room->id = $request->input('id');
        $room->room_name = $request->input('room_name');
        $room->room_description = $request->input('room_description');
        $room->max_occupancy = $request->input('max_occupancy');
        $room->save();

        return redirect('/rooms')->with('success', 'Room Created');
    }

    public function show($id){

    }

    public function edit($id){
        $room = Room::find($id);
        return view('rooms.edit')->with('room', $room);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'room_description' => 'required',
        ]);

        $room = Room::find($id);
        $room->room_description = $request->input('description');
        $room->save();

        return redirect('/rooms')->with('success', 'Room Description Updated');
    }

    public function destroy($id){
        $room = Room::find($id);
        $room->delete();
        return redirect('/rooms')->with('success', 'Room Deleted');
    }
}
