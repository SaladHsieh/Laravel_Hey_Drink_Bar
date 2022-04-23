<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hey Drink Bar</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" >
  </head>

  <body class="bg-gray-100">
    <div class="flex justify-between px-3 pt-2 pb-4">
      <a href="/" class="text-lg font-bold text-amber-500 p-2">Hey Drink Bar</a>
      <div>

      </div>
      <div class="flex">
        @auth
          <a href="{{ route('order') }}" class="font-bold px-3 py-2 text-amber-500 rounded-lg hover:bg-slate-100 hover:text-amber-600">Order</a>
          {{-- <a href="/posts" class="font-bold px-3 py-2 text-amber-500 rounded-lg hover:bg-slate-100 hover:text-amber-600">View Order</a> --}}
          {{-- <div href="" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">User name</div> --}}
          <form action="{{ route('logout') }}" method="post" >
            @csrf
            <button type="submit" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Logout</button>
          </form>
        @endauth

        @guest
          <a href="{{ route('login') }}" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Login</a>
          <a href="{{ route('register') }}" class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900">Register</a>
        @endguest

      </div>
    </div>
    @yield('content')
  </body>

</html>