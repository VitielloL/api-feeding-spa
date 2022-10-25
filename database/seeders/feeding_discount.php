<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class feeding_discount extends Seeder
{
    public function run()
    {
        DB::table('discounts')->insert([
            'name' => 'Desconto do Produto da Campanha do Grupo do Rio de Janeiro',
            'discount' => 10
        ]);
    }
}
