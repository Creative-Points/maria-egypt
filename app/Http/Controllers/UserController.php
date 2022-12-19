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
        // foreach($user AS $us)
        // {
        //     if($us == NULL)
        //     {
        //         return 1;
        //     }
        // }
        return view('user.profile', compact('user'));
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
