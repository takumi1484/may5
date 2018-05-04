<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShopComment extends Model
{
    /**
     * このコメントを所有する店を取得
     */
    public function shop()
    {
        return $this->belongsTo('App\Shop');
    }
}
