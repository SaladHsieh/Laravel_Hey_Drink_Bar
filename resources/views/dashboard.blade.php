@extends('layouts.app')

@section('content')
<nav class="flex justify-center space-x-4">
  <div class="font-bold text-xl px-3 py-2 text-slate-700 rounded-lg">Dashboard</div>
</nav>
<div class="w-1/3 mx-auto my-7">
  {{-- <form>
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Account</span>
      <input type="account" placeholder="account" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
        invalid:border-pink-500 invalid:text-pink-600
        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
      "/>
    </label>
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Username</span>
      <input type="text" placeholder="your name" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
        invalid:border-pink-500 invalid:text-pink-600
        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
      "/>
    </label>
    <label class="block">
      <span class="block text-sm font-medium text-slate-700">Phone</span>
      <input type="phone" placeholder="0911-995995" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
      disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
      invalid:border-pink-500 invalid:text-pink-600
      focus:invalid:border-pink-500 focus:invalid:ring-pink-500"/>
      <p class="mt-2 invisible peer-invalid:visible text-pink-600 text-sm">
        Please provide a valid email address.
      </p>
    </label>
    <button class="hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none bg-amber-400 text-white shadow-sm hover:shadow-md hover:bg-amber-500 border-slate-300 rounded-md mt-1 block w-20 px-3 py-2 mx-auto shadow-m">
      Submit
    </button>
  </form> --}}
</div>
@endsection