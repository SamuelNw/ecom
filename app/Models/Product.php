<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // You can define which fields are fillable or guarded
    protected $fillable = ['name', 'price', 'description', 'image'];
}
