<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable = ['nama_product', 'stock', 'price', 'description', 'id_brand'];
    public $visible = ['nama_product', 'stock', 'price', 'description', 'id_brand'];
    public $timestamp = true;

    public function Brand(){
        return $this->hasOne(Brand::class, 'id_brand');
    }
}
