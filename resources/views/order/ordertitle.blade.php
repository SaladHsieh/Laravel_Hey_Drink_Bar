@extends('layouts.app')

@section('content')
<div class="flex justify-center space-x-4">
  <div class="font-bold text-xl px-3 py-2 text-slate-700 rounded-lg">Place an Order</div>
</div>
<div class="w-1/3 mx-auto my-7">
  <form action="{{ route('order') }}" enctype="multipart/form-data" method="post">
    @csrf
    <label class="block mb-3">
      <span class="block text-sm font-medium text-slate-700">Title</span>
      <input
        type="text" 
        placeholder="Buy me a drink" 
        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
        focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
        disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
        invalid:border-pink-500 invalid:text-pink-600
        focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
      />
    </label>
    <div class="mb-3">
        <label for="note" class="">
          <span class="block text-sm font-medium text-slate-700">Upload Menu</span>
          <input 
            name="menu_image"
            type="file"
            accept="image/gif, image/jpeg, image/png"
            data-target="preview_menu_image"
          >
          <div>
            <img id="preview_menu_image">
          </div>
          
          @error('note')
          <div class="text-red-500 mt-2 text-sm">
            {{ $message }}
          </div>
          @enderror
        </label>
    </div>
    {{-- // TODO: --}}
    <button
    type="submit"
    class="hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none bg-amber-400 text-white shadow-sm hover:shadow-md hover:bg-amber-500 border-slate-300 rounded-md mt-1 block w-20 px-3 py-2 mx-auto shadow-m">
      Submit 
    </button>
  </form>
</div>

<script>
  var input = document.querySelector('input[name=menu_image]')
  input.addEventListener('change', function(e){
      //當檔案改變後，做一些事 
     readURL(e.target);   // this代表<input id="imgInp">
  });
  
  function readURL(input){
    var imgId = input.getAttribute('data-target')
    var img = document.querySelector('#' + imgId)
    if(input.files && input.files[0]){
      var reader = new FileReader();
      reader.onload = function (e) {
        $("#preview_menu_image").attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
</script>
@endsection