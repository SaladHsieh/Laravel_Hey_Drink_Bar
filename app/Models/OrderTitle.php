<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderTitle extends Model
{
  use HasFactory;
  protected $fillable = [
    'title',
    'image',
    'total_qty'
  ];
}
