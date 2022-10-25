<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CityGroup extends Model
{
    use HasFactory;

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
        return $this->belongsTo(CampaignController::class);
    }
}
