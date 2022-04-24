<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('auth.login');
  }
  public function store(Request $request)
  {
    // validation
    $this->validate($request, [
      'phone' => 'required',
      'password' => 'required', // make sure the info you submitted matches _confirmation name
    ]);

    // sign the user in
    if (!auth()->attempt($request->only('phone', 'password'))) {
      return back()->with('status', 'Invalid login details');
    }

    return redirect()->route('order');
  }
}
