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

    public function tour(Place $tour)
    {
        return view('tour', compact('tour'));
    }
}
