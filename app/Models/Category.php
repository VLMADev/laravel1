<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function products(){
        return $this->hasMany(Product::class);
        //hasMany - один -ко многим
        //Belongs to -  многие к одному
        //hasOne - один к одному
        //hasMany(throught) - многие ко многим через связующую модель
    }
}
