<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function search_hotel(Request $request ){
        $hotels = Hotel::with("city")->orderBy('id' ,'desc');
        if ($request->get('search')) {
            $moduleIndex = Hotel::where('created_at', 'like', '%' . $request->search . '%');
        }

        if ($request->get('checkin')) {
            $hotels = Hotel::where('checkin', 'like', '%' . $request->checkin . '%');
        }
        if ($request->get('checkout')) {
            $hotels = Hotel::where('checkout', 'like', '%' . $request->checkout . '%');
        }
        if ($request->get('number_of_room')) {
            $hotels = Hotel::where('number_of_room', 'like', '%' . $request->number_of_room . '%');
        }
        if ($request->get('number_of_people')) {
            $hotels = Hotel::where('number_of_people', 'like', '%' . $request->number_of_people . '%');
        }
        if ($request->get('number_of_children')) {
            $hotels = Hotel::where('number_of_children', 'like', '%' . $request->number_of_children . '%');
        }
        if ($request->get('city_id')) {
            $hotels = Hotel::with("city")->where('city_id', 'like', '%' . $request->city_id . '%');
        }
        //  form search all 
        if( $request->get('city_id') && $request->get('checkin') && $request->get('checkout') && $request->get('number_of_room') && $request->get('number_of_people') &&$request->get('number_of_children')){
            $hotels = Hotel::with("city")->where('city_id', 'like', '%' . $request->city_id . '%');
            $hotels = Hotel::where('checkin', 'like', '%' . $request->checkin . '%');
            $hotels = Hotel::where('checkout', 'like', '%' . $request->checkout . '%');
            $hotels = Hotel::where('number_of_room', 'like', '%' . $request->number_of_room . '%');
            $hotels = Hotel::where('number_of_people', 'like', '%' . $request->number_of_people . '%');
            $hotels = Hotel::where('number_of_children', 'like', '%' . $request->number_of_children . '%');






        }

        if ($request->status != null) {
            $hotels = Hotel::where('status', $request->status);
        }
        $hotels = $hotels->paginate(5);
        return response()->view('front_end.search-hotel' , compact('hotels' ,'request'));

    }
}
