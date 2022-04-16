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
    <div class="flex justify-between px-3 py-2 ">
      <div class="text-lg font-bold text-amber-500">Hey Drink Bar</div>
      <div>

      </div>
      <div class="flex">
        <div class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900 cursor-pointer">Sign In</div>
        <div class="font-bold px-3 py-2 text-slate-700 rounded-lg hover:bg-slate-100 hover:text-slate-900 cursor-pointer">Register</div>
      </div>
    </div>
    @yield('content')
  </body>

</html>