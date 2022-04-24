<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTitle extends Model
{
  use HasFactory;
  protected $fillable = [
    'title',
    'users_id',
    'image',
    'total_qty'
  ];
}
