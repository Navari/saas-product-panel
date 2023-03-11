<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariationSellerStock extends Model
{
    use HasFactory;
    protected $table = 'product_variation_seller_stocks';
    protected $guarded = [];
}
