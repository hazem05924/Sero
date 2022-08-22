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

        if ($request->get('name')) {
            $hotels = Hotel::where('name', 'like', '%' . $request->name . '%');
        }
        if ($request->get('city_id')) {
            $hotels = Hotel::with("city")->where('city_id', 'like', '%' . $request->city_id . '%');
        }

        if ($request->status != null) {
            $hotels = Hotel::where('status', $request->status);
        }
        $hotels = $hotels->paginate(5);
        return response()->view('front_end.search-hotel' , compact('hotels' ,'request'));

    }
}
