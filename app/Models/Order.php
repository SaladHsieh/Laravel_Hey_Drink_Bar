<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  // use HasFactory;
  protected $fillable = [
    'item',
    'ice',
    'sugar',
    'qty',
    'note',
  ];
  public function likedBy(OrderTitle $order_titles)
  {
    return $this->likes->contains('order_titles_id', $order_titles->id);
  }
}
