<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityModel extends Model
{
    use HasFactory;

    protected $table = 'city';

    protected $fillable = [
        'nome',
    ];
}
