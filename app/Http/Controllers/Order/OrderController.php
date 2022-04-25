<?php

namespace App\Http\Controllers\Order;

use App\Models\Order;
use App\Models\OrderTitle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
  // user middleware to protect routes
  public function __construct()
  {
    $this->middleware(['auth']);
  }
  public function index()
  {
    return view('order.index');
  }
  public function store(Request $request)
  {
    // dd($request);

    // Insert to OrderTitle DB
    $count = count($request->item);
    $total_qty = 0;
    $user_id = auth()->user()->id;

    for ($j = 1; $j <= $count; $j++) {
      $total_qty += $request->qty[$j];
    }

    $order_title_id = OrderTitle::create([
      'users_id' => $user_id,
      'title' => $request->order_title,
      'image' => $request->menu_image,
      'total_qty' => $total_qty,
    ]);

    $request->validate([
      'item' => 'required',
      'ice' => 'required',
      'sugar' => 'required',
      'qty' => 'required',
      'note' => 'required',
    ]);

    // Insert to Order DB
    for ($i = 1; $i <= $count; $i++) {
      $order = new Order;
      $order->item = $request->item[$i];
      $order->order_titles_id = $order_title_id->id;
      $order->ice = $request->ice[$i];
      $order->sugar = $request->sugar[$i];
      $order->qty = $request->qty[$i];
      $order->note = $request->note[$i];
      $order->save();
    }

    return redirect()->back();
  }
}
