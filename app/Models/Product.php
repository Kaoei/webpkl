<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    protected $fillable = [
        'title',
        'product_img',
        'category_id',
        'price',
        'description'
    ];

    protected $primaryKey = 'id_product';

    public function Category(){
        return $this->belongsTo(Category::class,'category_id');
    }
}
