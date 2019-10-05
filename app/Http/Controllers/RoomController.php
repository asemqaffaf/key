<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;


class RoomController extends Controller
{
//
    /** public function __construct()
    //    {
    //        $this->middleware('auth');
    //    }
     * //------------------------------------------------------------------------------------------------------------------------------------------------------------------
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('room.view')
        return view('room.index')->with(Room::all());
//            ->with('rooms', $table);
    }
//        if (Auth::check()) {
//            // dd(Auth::id());
//            $room_id = Auth::id();
//            $table = Room::where('room_id', $room_id)->get();
//            return view('room.index')->with('room', $table);
//        } else {
//            return view('welcome');
//        }
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('room.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
        Room::create(['title'=>$request->input('title'),
            'location'=>$request->input('location'),
            'price'=>$request->input('price'),
            'floor'=>$request->input('floor'),
            'gender'=>$request->input('gender'),
            'phone'=>$request->input('phone'),
            'description'=>$request->input('description'),
            'num_bed'=>$request->input('num_bed'),
            'rating'=>$request->input('rating'),
            'room_id'=>auth()->id(),
//            'img'=>$request->input('img'),

        ]);

//        return redirect()->route('room.index');
        return view('room.index');



//        $this->validate($request,[
//            "title"    => "required",
//            "location" => "required",
//            "price"    => "required",
//            "floor"    => "required",
//            "gender"   => "required",
//            "phone"    => "required",
//            "description"=>"required",
//            "num_bed"  =>"required",
////            "rating" =>'required',
////            'img'=>"required",
//        ]);
//
//        $table = new Room;
//        $table-> title = $request->title;
////        $table->room_id = auth()->id();
//        $table->room_id = 1;
//        $table-> location = $request->location;
//        $table-> price = $request->price;
//        $table-> floor = $request->floor;
//        $table-> gender = $request->gender;
//        $table-> phone = $request->phone;
//        $table-> description = $request->description;
//        $table-> num_bed = $request->num_bed;
//        $table-> img = $request->img;
//        $table->rating = 2;
////        $table -> img = $request->img;
//        $table->save();
//        dd($table->all());
//        return redirect()->route('room.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //missing $id
        return view('room.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function view(){
        return view('room.view');
    }
}
