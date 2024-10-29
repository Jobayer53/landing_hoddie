<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Helpers\CookieSD;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    function thankyou()
    {
        $dd = CookieSD::data()['products'];
        dd($dd);
        return view('frontend.thankyou');
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'color' => 'required',
            'size' => 'required',
            'quantity' => 'required',
        ]);
        $order = new Order();
        $order->order_id = uniqid('ORD');
        $order->name = $request->name;
        $order->number = $request->phone;
        $order->address = $request->address;
        $order->color = $request->color;
        $order->size = $request->size;
        $order->notes = $request->note;
        $order->quantity = $request->quantity;
        $order->shipping_charge = $request->shipping_charge;
        $order->price = $request->price;
        $order->total_price = ($request->quantity * $request->price) + $request->shipping_charge;
        $order->save();
        return back()->with('succ', 'Order added');
    }
}
