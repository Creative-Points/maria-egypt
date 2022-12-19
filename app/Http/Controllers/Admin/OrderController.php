<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('places', 'orders.place_id', '=', 'places.id')
            // ->join('images', 'orders.place_id', '=', 'places.id')
            ->join('images', 'images.place_id', '=', 'places.id')
            // ->select('places.*')
            ->where('images.flag', '=', 1)
            ->select('orders.*', 'orders.id as order_id', 'orders.status as order_status', 'users.*', 'places.*', 'images.image', 'users.name as username')
            ->get();
        return view('admin.order.index', compact('orders'));
    }
}
