<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use App\Models\OrderTitle;
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
      'item' => 'required',
      'ice' => 'required',
      'sugar' => 'required',
      'qty' => 'required',
      'note' => 'required',
    ]);

    $count = count($request->item);

    // Insert to Order DB
    for ($i = 1; $i <= $count; $i++) {
      $order = new Order;
      $order->item = $request->item[$i];
      $order->ice = $request->ice[$i];
      $order->sugar = $request->sugar[$i];
      $order->qty = $request->qty[$i];
      $order->note = $request->note[$i];
      $order->save();
    }

    // Insert to OrderTitle DB
    $total_qty = 0;
    for ($j = 1; $j <= $count; $j++) {
      $total_qty += $request->qty[$j];
    }
    OrderTitle::create([
      'title' => $request->order_title,
      'image' => $request->menu_image,
      'total_qty' => $total_qty,
    ]);

    return redirect()->back();
  }
}
