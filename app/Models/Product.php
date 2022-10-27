<?php

namespace App\Models;

use \Illuminate\Database\Eloquent\Factories\HasFactory;
use \Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'product';

    protected $guarded = [];
    protected $dates = ['created_at'];

    public function brand(){
        return $this->belongsTo(brand::class, 'brand_id', 'id');
    }

    public function gudang(){
        return $this->belongsTo(gudang::class, 'gudang_id', 'id');
    }
}

