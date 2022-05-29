<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(BloodTableSeeder::class);
        $this->call(NationalitiesTableSeeder::class);
        $this->call(ReligionTableSeeder::class);
    }

}
