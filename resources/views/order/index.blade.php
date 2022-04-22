@extends('layouts.app')

@section('content')
<script src="https://cdn.tailwindcss.com"></script>

<div class="flex justify-center space-x-4">
  <div class="font-bold text-xl px-3 py-2 text-slate-700 rounded-lg">Place an Order</div>
</div>
<div class="w-full px-4">
  <div class="w-full max-w-5xl p-5 mx-auto bg-gray-300 rounded-2xl">
    <h4 class="text-center text-3xl">Place an Order</h4>
    
    <form action="{{ route('order') }}" method="post">
      @csrf
      <div class="line_item_box mb-3">
        <div class="flex items-end line_item">
          <div class="flex flex-col mr-2">
            <label class="">Item</label>
            <input 
            type="text" 
            name="item1" 
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
            <label class="">Ice</label>
            <select 
            name="ice1" 
            required 
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
              <option value="1">正常冰</option>
              <option value="2">少冰</option>
              <option value="3">完全去冰</option>
            </select>
          </div>
          <div class="flex flex-col mr-2">
            <label class="">Sugar</label>
            <select 
            name="sugar1" 
            required
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500"
            >
              <option value="1">正常糖</option>
              <option value="2">少糖</option>
              <option value="3">無糖</option>
            </select>
          </div>
          <div class="flex flex-col mr-2">
            <label class="">Quantity</label>
            <input 
            type="number" 
            min="1" 
            name="qty1" 
            required
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
            disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
            invalid:border-pink-500 invalid:text-pink-600
            focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
            />
          </div>
          <div class="flex flex-col mr-2">
            <label class="">Note</label>
            <input 
            type="text" 
            name="note1"
            class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
            disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
            invalid:border-pink-500 invalid:text-pink-600
            focus:invalid:border-pink-500 focus:invalid:ring-pink-500" 
            />
          </div>
          <i class="add_item hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none hover:bg-amber-500
          bg-amber-400 text-slate-100 text-sm rounded-full p-2 border-2  hover:border-slate-300">Add</i>
        </div>
      </div>
      <button class="hover:-translate-y-0.5 transition motion-reduce:hover:translate-y-0 motion-reduce:transition-none hover:bg-amber-500
        bg-amber-400 text-white shadow-sm hover:shadow-md border-slate-300 rounded-md mt-1 block w-20 px-3 py-2 mx-auto shadow-m" type="submit">
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
  $(line_item_box).append(`          <div class="flex items-end line_item">
      <div class="flex flex-col mr-2">
        <label class="">Item</label>
        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500"" name="item${gi}" required />
      </div>
      <div class="flex flex-col mr-2">
        <label class="">Ice</label>
        <select name="ice${gi}" required class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
          <option value="1">正常冰</option>
          <option value="2">少冰</option>
          <option value="3">完全去冰</option>
        </select>
      </div>
      <div class="flex flex-col mr-2">
        <label class="">Sugar</label>
        <select name="sugar${gi}" required class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500">
          <option value="1">正常糖</option>
          <option value="2">少糖</option>
          <option value="3">無糖</option>
        </select>
      </div>
      <div class="flex flex-col mr-2">
        <label class="">Quantity</label>
        <input type="number" min="1" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500" name="qty${gi}" required />
      </div>
      <div class="flex flex-col mr-2">
        <label class="">Note</label>
        <input type="text" class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
          invalid:border-pink-500 invalid:text-pink-600
          focus:invalid:border-pink-500 focus:invalid:ring-pink-500" name="note${gi}" />
      </div>
      <button class="trash_btn"><i class="fas fa-trash-alt">Remove</i></button>
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
</script>
@endsection