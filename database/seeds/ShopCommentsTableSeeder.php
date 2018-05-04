<?php

use Illuminate\Database\Seeder;
use App\ShopComment;

class ShopCommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $para = [
            'shop_id' => '1',
            'shop_comment' => 'testcomment shop1',
        ];
        $data = new ShopComment;
        $data->fill($para)->save();
    }
}
