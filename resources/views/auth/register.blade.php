@extends('layouts.app')

@section('content')
<nav class="flex justify-center space-x-4">
  <div class="font-bold text-xl px-3 py-2 text-slate-700 rounded-lg">Register Now</div>
</nav>
<div class="w-1/3 mx-auto my-7">
  <form action="{{ route('register') }}" method="post">
     @csrf {{-- token store inside of the form, which is submitted along with the form --}}
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Account</span>
      <input type="text"  name="account" id="account" placeholder="account"
      class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
        invalid:border-pink-500 invalid:text-pink-600
        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
        @error('name') border-red-500 @enderror" value="{{ old('account') }}"
      />
      @error('account')
        <div class="text-red-500 mt-2 text-sm">
          {{ $message }}
        </div>
      @enderror
    </label>
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Username</span>
      <input type="text" name="username" id="username" placeholder="your name"
      class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
        invalid:border-pink-500 invalid:text-pink-600
        focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
        @error('name') border-red-500 @enderror" value="{{ old('username') }}"
      />
      @error('username')
      <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
      </div>
      @enderror
    </label>
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Phone</span>
      <input type="phone"  name="phone" id="phone" pattern="[0]{1}[9]{1}[0-9]{8}" placeholder="0911995995"
      class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
        invalid:border-pink-500 invalid:text-pink-600
        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
        @error('name') border-red-500 @enderror" value="{{ old('phone') }}"
      />
      @error('phone')
      <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
      </div>
    @enderror
    </label>
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Password</span>
      <input type="password" name="password" id="password" placeholder=""
      class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
        invalid:border-pink-500 invalid:text-pink-600
        focus:invalid:border-pink-500 focus:invalid:ring-pink-500
        @error('name') border-red-500 @enderror" value="{{ old('password') }}"
      />
      @error('password')
      <div class="text-red-500 mt-2 text-sm">
        {{ $message }}
      </div>
    @enderror
    </label>
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Confirm Password</span>
      <input type="password" name="password_confirmation" id="password_confirmation" placeholder=""
      class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
      focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
      disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
      invalid:border-pink-500 invalid:text-pink-600
      focus:invalid:border-pink-500 focus:invalid:ring-pink-500
      @error('name') border-red-500 @enderror" value="{{ old('password_confirmation') }}"
      />
      @error('password_confirmation')
        <div class="text-red-500 mt-2 text-sm">
          {{ $message }}
        </div>
      @enderror
    </label>
    <button type="submit"
    class="hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none bg-amber-400 text-white shadow-sm hover:shadow-md hover:bg-amber-500 border-slate-300 rounded-md mt-1 block w-20 px-3 py-2 mx-auto shadow-m">
      Submit
    </button>
  </form>
</div>
@endsection