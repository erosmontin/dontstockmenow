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
        $this->call(SpecialUserSeeder::class);
        $this->call(StockSeeder::class);


//        $this->call(UserSeeder::class);
    }
}
