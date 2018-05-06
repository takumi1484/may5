<?php

use Illuminate\Database\Seeder;
use App\MachineName;

class MachineNamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $para = [
            'machine_name' => 'sdvx',
        ];
        $data = new MachineName;
        $data->fill($para)->save();

        $para = [
            'machine_name' => "pop'n",
        ];
        $data = new MachineName;
        $data->fill($para)->save();

        $para = [
        'machine_name' => 'chunithm',
    ];
        $data = new MachineName;
        $data->fill($para)->save();
    }
}
