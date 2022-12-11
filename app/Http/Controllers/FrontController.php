<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $tours = DB::table('places')
                    ->join('images', 'images.place_id', '=', 'places.id')
                    ->select('places.*', 'images.image')
                    ->where('images.flag', '=', 1)
                    ->where('places.status', '=', 1)
                    ->get();
        return view('index', compact('tours'));
    }

    /**
    * Tour
    * @param model $tour
    * @return \Illuminate\Http\Response
    **/
    public function tour(Place $place)
    {
        $images = DB::table('images')->where('place_id', '=', $place->id)->get();
        $days = DB::table('itinerary')->where('place_id', '=', $place->id)->get();
        // return var_dump($images);
        return view('tour', compact('place', 'images', 'days'));
    }
}
