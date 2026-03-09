<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KitSeeder extends Seeder
{
    public function run()
    {
        DB::table('kits')->insert([
            ['name' => 'StarterKit'],
            ['name' => 'Educational Robotics Kit'],
            ['name' => 'Kit5']
        ]);
    }
}
