<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=[
        'product_name',
        'image',
        'price',
        'publish_status',
        'category_id',
        'discount_price',
        'waiting_time',
        'description',
    ];
}