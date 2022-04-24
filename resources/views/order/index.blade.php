@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="flex justify-center space-x-4">
  <div class="font-bold text-xl px-3 py-2 text-slate-700 rounded-lg">Place an Order</div>
</div>
<div class="w-full px-4">
  <div class="w-full max-w-5xl p-5 mx-auto bg-gray-300 rounded-2xl">
    
    <form action="{{ route('order') }}" method="post">
      @csrf
      <label class="block w-1/3 my-3 mx-auto">
        <span class="block text-sm font-medium text-slate-700">Title</span>
        <input
          type="text" 
          name="order_title"
          placeholder="Buy me a drink" 
          class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
        />
      </label>
      <div class="mb-10 flex">
          <label for="note" class="flex flex-col mx-auto text-sm font-medium text-slate-700">
            <div class="flex flex-col mx-auto mb-3">
              <span class="block text-sm font-medium text-slate-700">Upload Menu</span>
              <input 
              name="menu_image"
              type="file"
              accept="image/gif, image/jpeg, image/png"
              data-target="preview_menu_image"
              class="mx-auto"
              >
            </div>
            <div>
              <img 
              id="preview_menu_image" 
              src="" 
              class="w-4/5 mx-auto" >
            </div>
            
            @error('note')
            <div class="text-red-500 mt-2 text-sm">
              {{ $message }}
            </div>
            @enderror
          </label>
      </div>
      <div class="line_item_box mb-3 flex flex-col">
        <div class="flex items-end line_item mx-auto">
          <div class="flex flex-col mr-2">
            <label class="block text-sm font-medium text-slate-700">Item</label>
            <input 
            type="text" 
            name="item[1]" 
            required
            placeholder="Ice Cream Black Tea"
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
          />
          </div>
          <div class="flex flex-col mr-2">
            <label class="block text-sm font-medium text-slate-700">Ice</label>
            <select 
            name="ice[1]" 
            required 
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
              <option value="正常冰">正常冰</option>
              <option value="少冰">少冰</option>
              <option value="完全去冰">完全去冰</option>
            </select>
          </div>
          <div class="flex flex-col mr-2">
            <label class="block text-sm font-medium text-slate-700">Sugar</label>
            <select 
            name="sugar[1]" 
            required
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
            >
              <option value="正常糖">正常糖</option>
              <option value="少糖">少糖</option>
              <option value="無糖">無糖</option>
            </select>
          </div>
          <div class="flex flex-col mr-2">
            <label class="block text-sm font-medium text-slate-700">Quantity</label>
            <input
            id="qty"
            type="number" 
            min="1" 
            name="qty[1]" 
            required
            class="qty mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
            disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
            invalid:border-pink-500 invalid:text-pink-600
            focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
            />
          </div>
          <div class="flex flex-col mr-2">
            <label class="block text-sm font-medium text-slate-700">Note</label>
            <input 
            type="text" 
            name="note[1]"
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
            disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
            invalid:border-pink-500 invalid:text-pink-600
            focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
            />
          </div>
          <button 
          class="add_item 
          hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none hover:bg-amber-500
          bg-amber-400 text-white text-sm rounded-full p-2 border-2 border-transparent hover:shadow-md hover:border-2 hover:border-slate-200">Add</button>
        </div>
      </div>
      <div class="flex my-3 rounded">
        <div class="flex flex-row mx-auto my-3">
          <div colspan="3" class="text-right pr-3 font-bold">
            Total:
          </div>
          <input id="total_quantity" class="rounded px-3 py-2" readonly>
        </div>
      </div>
      <button class="hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none hover:bg-amber-500
        bg-amber-400 text-white shadow-sm hover:shadow-md rounded-md mt-1 block w-20 px-3 py-2 mx-auto shadow-m border-2 border-transparent hover:border-2 hover:border-slate-200" type="submit">
        Submit
      </button>
    </form>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"></script>
<script>
let line_item_box = document.querySelector(".line_item_box"); // 事件列表
let add_item = document.querySelector(".add_item"); // add Item button

add_item.addEventListener("click", addlistTo); // 事件監聽 click to add new item

let gi = 1; // 變數 for item

// add new item
function addlistTo(e) {
  gi++; // 新增的item變數+1
  e.preventDefault(); // 避免原本的動作執行
  $(line_item_box).append(`
  <div class="flex items-end line_item mx-auto">
      <div class="flex flex-col mr-2">
        <label class="block text-sm font-medium text-slate-700">Item</label>
        <input 
        type="text" 
        name="item[${gi}]" 
        required 
        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500"" 
          />
      </div>
      <div class="flex flex-col mr-2">
        <label class="block text-sm font-medium text-slate-700">Ice</label>
        <select 
        name="ice[${gi}]" 
        required 
        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
          <option value="正常冰">正常冰</option>
          <option value="少冰">少冰</option>
          <option value="完全去冰">完全去冰</option>
        </select>
      </div>
      <div class="flex flex-col mr-2">
        <label class="block text-sm font-medium text-slate-700">Sugar</label>
        <select 
        name="sugar[${gi}]" 
        required 
        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
          <option value="正常糖">正常糖</option>
          <option value="少糖">少糖</option>
          <option value="無糖">無糖</option>
        </select>
      </div>
      <div class="flex flex-col mr-2">
        <label class="block text-sm font-medium text-slate-700">Quantity</label>
        <input
        id="qty"
        type="number"
        min="1"
        name="qty[${gi}]"
        required
        class="qty mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
          />
      </div>
      <div class="flex flex-col mr-2">
        <label class="block text-sm font-medium text-slate-700">Note</label>
        <input
        type="text" 
        name="note[${gi}]"
        class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
        />
      </div>
      <button class="trash_btn hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none hover:bg-red-500
          bg-red-400 text-white text-sm rounded-full p-2 border-2 border-transparent hover:shadow-md hover:border-2 hover:border-slate-200">Del</button>
    </div>`);
}

// remove item
$(document).on("click", ".trash_btn", function (event) {
  $(this).parent().remove();

  // 計算出有幾個品項
  let line_item_len = $(".line_item").length;

  for (i = 0; i < line_item_len; i++) {
    //找line_item_box裡的每個line_item
    var findItem = document
      .querySelector(".line_item_box")
      .querySelectorAll(".line_item")[i];

    // 一行有５個item
    for (k = 0; k < 5; k++) {
      // 找每個line_item裡的全部"input"
      let findItemInput = findItem.getElementsByTagName("input");

      // 找每個line_item裡的全部"select"
      let findItemSelect = findItem.getElementsByTagName("select");

      if (findItemInput[k] !== undefined) {
        // 找每個"input"裡的name
        let InputOldName = $(findItemInput[k]).attr("name");
        // 將"oldName"裡的數字替換成新的數字排序並替換成 newName
        let InputNewName = InputOldName.replace(/\d+/, i + 1);
        $(findItemInput[k]).attr("name", InputNewName);
      }

      if (findItemSelect[k] !== undefined) {
        // 找每個"select"裡的name
        let SelOldName = $(findItemSelect[k]).attr("name");
        // 將"oldName"裡的數字替換成新的數字排序並替換成 newName
        let SelNewName = SelOldName.replace(/\d+/, i + 1);
        $(findItemSelect[k]).attr("name", SelNewName);
      }
    }
  }
  //新增item name的數字排序要重給
  gi = line_item_len;
});

// Count Quantity
function total_quantity() {
  var sum = 0;
  $('.qty').each(function() {
    var value = parseInt($(this).val());
    if(value.length != 0) {
      sum = sum + value;
    }
  });
  $('#total_quantity').val(sum);
}
$(document).on('change', '.qty', total_quantity);

// Upload image
var input = document.querySelector('input[name=menu_image]')
  input.addEventListener('change', function(e){
     readURL(e.target);   // this represents <input id="imgInp">
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