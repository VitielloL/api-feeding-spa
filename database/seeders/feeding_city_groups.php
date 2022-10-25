<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feeding_city_groups extends Seeder
{
    public function run()
    {
        DB::table('city_groups')->insert([
            'name' => 'Grupo do Rio de Janeiro',
            'group_campaign_id' => 1,
        ]);
    }
}
