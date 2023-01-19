<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'categoryID', 'image_url', 'description'];

    public function Category(){
        return $this->belongsTo(Product::class);
    }
}
