<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feeding_product extends Seeder
{
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Produto da Campanha do Grupo do Rio de Janeiro',
            'value' => 10,
            'discount_id' => 1
        ]);
    }
}
