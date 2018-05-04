<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    /**リレーション(1:多)
     * 店のコメントを取得
     */
    public function shopComments()
    {
        return $this->hasMany('App\ShopComment');
    }
    /**リレーション(1:多)
     * 店の筐体を取得
     */
    public function machines()
    {
        return $this->hasMany('App\Machine');
    }
}
