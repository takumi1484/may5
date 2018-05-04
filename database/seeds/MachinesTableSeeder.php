<?php

use Illuminate\Database\Seeder;
use App\Machine;

class MachinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $para = [
            'shops_id'=>'1',
            'machine_names_id'=>'1',
            'machine_count'=>'2',
            'machine_comments_id'=>'1',
            'jack_usable'=>'1',
        ];
        $data = new Machine;
        $data->fill($para)->save();
    }
}
