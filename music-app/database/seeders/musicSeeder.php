<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class musicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('music')->insert(['title' => 'Old Money', 'Artist' => 'AP Dhillion', 'duration' => 5]);
        DB::table('music')->insert(['title' => 'Marathon', 'Artist' => 'Skrapz', 'duration' => 4]);
        //DB::table('music')->insert(['title' => '', 'year' => 1989, 'duration' => 120]);
    }
}
