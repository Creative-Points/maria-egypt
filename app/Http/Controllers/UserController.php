<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profile()
    {
        $user = auth()->user();
        $attrs_is_null = [];
        if($user->title == NULL)
        {
            $attrs_is_null[] = 'Title';
        }
        if($user->gender == NULL)
        {
            $attrs_is_null[] = 'Gender';
        }
        if($user->nation == NULL)
        {
            $attrs_is_null[] = 'Nationality';
        }
        if($user->phone == NULL)
        {
            $attrs_is_null[] = 'Phone';
        }
        if($user->phone_ext == NULL)
        {
            $attrs_is_null[] = 'Phone EXT';
        }
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
        return view('user.profile', compact('user', 'orders', 'attrs_is_null'));
    }

    public function setting()
    {
        $user = auth()->user();
        return view('user.setting', compact('user'));
    }

    public function save_setting(Request $request)
    {
        $user = auth()->user();
        $valid = Validator::make($request->all(), [
            'title' => 'required|string|min:2|max:3',
            'name' => 'required|string',
            'password' => 'nullable|string|min:8|confirmed',
            'gender' => 'required|numeric',
            // 'email' => 'email|unique:users,email,'.$user->id,
            'phone' => 'required|numeric|unique:users,phone,'.$user->id,
            'phone_ext' => 'required|numeric',
            'nationality' => 'nullable|string',
        ]);

        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            $user = User::find($user->id);
            $user->title = $request->title;
            $user->name = $request->name;
            $user->gender = $request->gender;
            $user->phone = $request->phone;
            $user->phone_ext = $request->phone_ext;
            if(!empty($request->nationality))
            {
                $user->nation = $request->nationality;
            }
            if(!empty($request->password))
            {
                $user->password = Hash::make($request->password);
            }
            $user->update();

            return back()->with('status', 'Your data is saved.');
        }
    }

    public function order(Request $request, Place $place)
    {
        $user = auth()->user();
        $attrs_is_null = [];
        if($user->title == NULL)
        {
            $attrs_is_null[] = 'Title';
        }
        if($user->gender == NULL)
        {
            $attrs_is_null[] = 'Gender';
        }
        if($user->nation == NULL)
        {
            $attrs_is_null[] = 'Nationality';
        }
        if($user->phone == NULL)
        {
            $attrs_is_null[] = 'Phone';
        }
        if($user->phone_ext == NULL)
        {
            $attrs_is_null[] = 'Phone EXT';
        }
        if(count($attrs_is_null) > 0)
        {
            $string = '';
            foreach($attrs_is_null as $attr)
            {
                $string .= $attr . ',';
            }
            $string = '['.$string.']';
            return back()->with('error', 'Please complete your data is your profile setting. Your Data missing is: '. $string);
        }
        $valid = Validator::make($request->all(), [
            'arrival' => 'required|string',
            'departure' => 'required|string',
            'adults' => 'required|numeric',
            'children' => 'required|numeric',
            'infants' => 'required|numeric',
            'save' => 'string|max:5',
            'comment' => 'string|nullable'
        ]);
        if($valid->fails())
        {
            return back()->withInput()->withErrors($valid);
        }else{
            $user = auth()->user();
            DB::table('orders')->insertGetId([
                'user_id' => $user->id,
                'place_id' => $place->id,
                'arrival' => $request->arrival,
                'departure' => $request->departure,
                'adults' => $request->adults,
                'children' => $request->children,
                'infants' => $request->infants,
                'created_at' => now(),
            ]);
            if(isset($request->save))
            {
                $old = DB::table('order_details')
                        ->where('user_id', '=', $user->id)
                        ->get();
                if(count($old) > 0)
                {
                    foreach($old as $old)
                    {
                        DB::table('order_details')
                        ->where('user_id', '=', $user->id)
                        ->update([
                            'arrival' => $request->arrival,
                            'departure' => $request->departure,
                            'adults' => $request->adults,
                            'children' => $request->children,
                            'infants' => $request->infants,
                            'created_at' => now(),
                        ]);
                    }
                }else{
                    DB::table('order_details')
                    ->insert([
                        'user_id' => $user->id,
                        'arrival' => $request->arrival,
                        'departure' => $request->departure,
                        'adults' => $request->adults,
                        'children' => $request->children,
                        'infants' => $request->infants,
                        'created_at' => now(),
                    ]);
                }
            }
            return back()->with('status', 'Successfully.');
        }
    }

    public function oldOrder(Place $place)
    {
        $user = auth()->user();
        $old = DB::table('order_details')
                ->where('user_id', '=', $user->id)
                ->get();
        DB::table('orders')->insert([
            'user_id' => $user->id,
            'place_id' => $place->id,
            'arrival' => $old[0]->arrival,
            'departure' => $old[0]->departure,
            'adults' => $old[0]->adults,
            'children' => $old[0]->children,
            'infants' => $old[0]->infants,
            'created_at' => now(),
        ]);
        
        return back()->with('status', 'Successfully.');
    }
}
