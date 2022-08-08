<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['image','product_id'];

    public function Product(){
    return $this->belongsTo(Product::class);
    }
}
