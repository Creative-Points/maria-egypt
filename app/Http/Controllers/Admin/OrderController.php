<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function index()
    {
        $orders = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('places', 'orders.place_id', '=', 'places.id')
            ->join('images', 'images.place_id', '=', 'places.id')
            ->where('images.flag', '=', 1)
            ->select([
                'orders.*', 
                'orders.created_at as ca', 
                'orders.id as order_id', 
                'users.id as user_id', 
                'places.id as place_id', 
                'orders.status as order_status', 
                'users.*', 
                'places.*', 
                'images.image', 
                'users.name as username'
            ])
            ->orderBy('orders.created_at', 'desc')
            ->get();
        return view('admin.order.index', compact('orders'));
    }

    /**
     * Update order status
     * @param model $order
     */

    public function progress(Order $order)
    {
        $order->status = 1;
        $order->update();
        return back()->with('status', 'Order Updated.');
    }

    public function complete(Order $order)
    {
        $order->status = 2;
        $order->update();
        return back()->with('status', 'Order Updated.');
    }

    public function cancel(Order $order)
    {
        $order->status = 3;
        $order->update();
        return back()->with('status', 'Order Updated.');
    }

    public function new(Order $order)
    {
        $order->status = 0;
        $order->update();
        return back()->with('status', 'Order Updated.');
    }

    public function showUser(User $user)
    {
        return view('admin.user.index', compact('user'));
    }
}