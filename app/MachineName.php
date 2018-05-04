<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MachineName extends Model
{
    /**
     * このコメントを所有する筐体を取得
     */
    public function machine()
    {
        return $this->belongsTo('App\Machine');
    }
}
