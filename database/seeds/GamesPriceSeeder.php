<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->update(['price' => random_int(10, 90)]);
    }
}
