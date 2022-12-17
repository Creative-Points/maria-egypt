<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    /**
    * Tour
    * @return \Illuminate\Http\Response
    **/
    public function tours()
    {
        $tours = DB::table('places')
                    ->join('images', 'images.place_id', '=', 'places.id')
                    ->select('places.*', 'images.image')
                    ->where('images.flag', '=', 1)
                    ->where('places.status', '=', 1)
                    ->get();
        return view('tours', compact('tours'));
    }

    public function about()
    {
        return view('about');
    }

    public function privacy()
    {
        return view('privacy');
    }

    public function contact()
    {
        return view('contact');
    }

    public function order(Request $request, Place $place)
    {
        $valid = Validator::make($request->all(), [
            'title' => 'required|string|min:2|max:3',
            'name' => 'required|string',
            'password' => 'required|string|min:8',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|numeric|unique:users,phone',
            'phone_ext' => 'required|numeric',
            'nationality' => 'required|string',
            'arrival' => 'required|string',
            'departure' => 'required|string',
            'adults' => 'numeric',
            'children' => 'numeric',
            'infants' => 'numeric',
            'comment' => 'string|nullable'
        ]);
        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            $id = User::create([
                'title' => $request->title,
                'name' => $request->name,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'phone' => $request->phone,
                'phone_ext' => $request->phone_ext,
                'nation' => $request->nationality,
                'created_at' => now(),
            ])->assignRole('user');
            $orderid = DB::table('orders')->insertGetId([
                'user_id' => $id,
                'place_id' => $place->id,
                'arrival' => $request->arrival,
                'departure' => $request->departure,
                'adults' => $request->adults,
                'children' => $request->children,
                'infants' => $request->infants,
                'created_at' => now(),
            ]);
            return back()->with('status', 'Successfully.');
        }
    }
}
