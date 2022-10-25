<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(feeding_discount::class);
        $this->call(feeding_product::class);
        $this->call(feeding_group_campaigns::class);
        $this->call(feeding_city_groups::class);
        $this->call(feeding_city::class);
    }
}
