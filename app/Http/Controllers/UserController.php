<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $orders = DB::table('orders')
                ->join('users', 'orders.user_id', '=', 'users.id')
                ->join('places', 'orders.place_id', '=', 'places.id')
                ->join('images', 'images.place_id', '=', 'places.id')
                ->where('images.flag', '=', 1)
                ->where('orders.user_id', '=', $user->id)
                ->select([
                    'orders.*', 
                    'orders.created_at as ca', 
                    'orders.id as order_id', 
                    // 'users.id as user_id', 
                    'places.id as place_id', 
                    'orders.status as order_status', 
                    // 'users.*', 
                    'places.*', 
                    'images.image', 
                    // 'users.name as username'
                ])
                ->orderBy('orders.created_at', 'desc')
                ->get();
        return view('user.profile', compact('user', 'orders'));
    }

    public function order(Request $request, Place $place)
    {
        $valid = Validator::make($request->all(), [
            'arrival' => 'required|string',
            'departure' => 'required|string',
            'adults' => 'required|numeric',
            'children' => 'required|numeric',
            'infants' => 'required|numeric',
            'comment' => 'string|nullable'
        ]);
        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            $orderid = DB::table('orders')->insertGetId([
                'user_id' => auth()->user()->id,
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
