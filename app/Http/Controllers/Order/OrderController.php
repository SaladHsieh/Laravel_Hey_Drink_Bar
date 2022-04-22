<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
  public function index()
  {
    return view('order.index');
  }
  public function store(Request $request)
  {
    // dd($request);
    $request->validate([
      'item' => 'required|string',
      'qty' => 'required|numeric',
    ]);

    $count = count($request->item);

    $order = new Order;
    $order->item = $request->item;
    $order->qty = $request->qty;
    $order->save();

    return redirect()->back();
  }
}
