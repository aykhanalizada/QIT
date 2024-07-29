<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $fillable = ['name'];
    public function dgxProducts(){
        return $this->hasMany(DGX_Product::class);
    }

    public function product(){
       return  $this->hasOne(Product::class);
    }
}
