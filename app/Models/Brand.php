<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    public $fillable = ['nama_brand'];
    public $visible = ['nama_brand'];
    public $timestamp = true;

    public function Product(){
        return $this->belongsTo(Product::class, 'id_brand');
    }
}
