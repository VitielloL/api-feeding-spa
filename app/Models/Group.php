<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $table = 'city_groups';

    protected $fillable = [
        'name',
        'group_campaign_id'
    ];

    public function cities()
    {
        return $this->hasMany(City::class);
    }

    public function campaign()
    {
        return $this->belongsTo(Campaign::class);
    }
}
