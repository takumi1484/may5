<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(ShopsTableSeeder::class);
        $this->call(ShopCommentsTableSeeder::class);
        $this->call(MachinesTableSeeder::class);
        $this->call(MachineCommentsTableSeeder::class);
        $this->call(MachineNamesTableSeeder::class);
    }
}
