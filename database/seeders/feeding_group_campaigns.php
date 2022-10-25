<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feeding_group_campaigns extends Seeder
{
    public function run()
    {
        DB::table('group_campaigns')->insert([
            'name' => 'Campanha do Grupo do Rio de Janeiro',
        ]);
    }
}
