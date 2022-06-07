<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{

    public function category() {
        return $this->belongsTo(Category::class);
        //->belongTo(Catalog::class,'category_id'); имя свзяующего поля совпадает с именем класса_id то 2 параметр писать не надо
    }

    public function scopeVipStatus($query){ // подготовка запроса (скопы)
        return $query->where('status','vip')->get();
        //return $query->where('status','vip')->get(); тогда в скопе не используем гет
    }

    public function fullName(){
        return $this->name.''.$this->subname;
        // в блейдах и контроллерах будет $user->full_name
    }
}

// на главной странице надо показать товары VIP
// зпрос на главнйо странице
// Product::vipStatus()->get();
//// Product::vipStatus()->populat()->get();
///
///

