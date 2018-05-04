<?php

use Illuminate\Database\Seeder;
use App\MachineComment;

class MachineCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $para = [
            'machine_id' => '1',
            'machine_comment' => 'つまみがぼろい',
        ];
        $data = new MachineComment;
        $data->fill($para)->save();
    }
}
