<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'id_order',
        'id_user',
        'id_product',
        'name',
        'email',
        'domain_name',
        'bukti_tf',
        'catatan',
        'status'
    ];

    protected $primaryKey = 'id_order';

    public function Product(){
        return $this->belongsTo(Product::class,'id_product');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
