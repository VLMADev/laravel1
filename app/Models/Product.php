<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function category() {
        return $this->belongsTo(Category::class);
        //->belongTo(Catalog::class,'category_id'); имясвзяующего поля совпадает с именем класса_id то 2 параметр писать не надо
    }

    public function scopeVipStatus($query){ // подготовка запроса (скопы)
        return $query->where('status','vip');
        //return $query->where('status','vip')->get(); тогда в скопе не используем гет
    }
}

// на главной странице надо показать товары VIP
// зпрос на главнйо странице
// Product::vipStatus()->get();
//// Product::vipStatus()->populat()->get();
