<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }
  public function store(Request $request)
  {
    // dd($request->only('phone', 'password'));

    // validation
    $this->validate($request, [
      'account' => 'required|unique:users|max:255',
      'username' => 'required|unique:users|max:255',
      'phone' => 'required|unique:users|max:255',
      'password' => 'required|confirmed', // make sure the info you submitted matches _confirmation name
    ]);

    // store user
    User::create([
      'account' => $request->account,
      'username' => $request->username,
      'phone' => $request->phone,
      'password' => Hash::make($request->password),
    ]);

    // sign the user in
    auth()->attempt($request->only('phone', 'password'));

    // redirect
    return redirect()->route('order');
  }
}
