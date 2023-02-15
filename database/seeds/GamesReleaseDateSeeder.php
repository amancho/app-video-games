<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesReleaseDateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->update(['release_date' => date('Y-m-d H:i:s')]);
    }
}
