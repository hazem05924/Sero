<?php

namespace App\Http\Controllers;

use App\Models\BookHotel;
use App\Models\Facilitie;
use App\Models\Hotel;
use App\Models\ImageHotel;
use App\Models\Room;
use Illuminate\Http\Request;

class BookHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexBook($id)
    {
        $book_hotels=BookHotel::where('hotel_id', $id)->orderBy('created_at', 'desc')->paginate(4);
        return response()->view('front_end.book-hotel', compact('book_hotels','id'));
    }

    public function createBook($id)
    {
        $book_hotels=BookHotel::where('hotel_id', $id)->orderBy('created_at', 'desc')->paginate(4);

        $hotels= Hotel::where('id',$id)->get();
        $images=ImageHotel::where('hotel_id', $id)->orderBy('created_at', 'desc')->get();
        $rooms=Room::where('hotel_id', $id)->orderBy('created_at', 'desc')->paginate(5);
        $facilities=Facilitie::where('hotel_id', $id)->orderBy('created_at', 'desc')->paginate(1);


          return response()->view('front_end.book-hotel', compact('id','hotels','images','rooms','facilities'));
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
