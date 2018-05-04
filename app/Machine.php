<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Machine extends Model
{
    /**リレーション
     * 筐体のコメントを取得(1:多)
     */
    public function machineComments()
    {
        return $this->hasMany('App\MachineComment');
    }
    /**リレーション
     * machineに関連するmachine_nameを取得(1:1)
     */
    public function machineName()
    {
        return $this->hasOne('App\MachineName');
    }
}
