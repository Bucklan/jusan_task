<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'image'];


    public function getImagePathAttribute(): string
    {
        if (preg_match("/\bhttp\w*/i",$this->image)){
            return $this->image;
        }
        return asset('images/products/' . $this->image);
    }
}
