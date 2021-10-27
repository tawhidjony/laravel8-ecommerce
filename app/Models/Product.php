<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['id','category_id', 'name', 'price', 'qty', 'image', 'product_details'];

    public function category(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
