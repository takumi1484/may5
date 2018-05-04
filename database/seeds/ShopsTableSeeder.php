<?php

use Illuminate\Database\Seeder;
use App\Shop;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $para = [
            'shops_name' => 'SHOP1',
            'google_rel' => 'test',
        ];
        $data = new Shop;
        $data->fill($para)->save();
    }
}
