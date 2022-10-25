<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'valor',
        'discount_id'
    ];

    public function groupCampaigns()
    {
        return $this->hasMany(GroupCampaign::class);
    }

    public function discount()
    {
        return $this->belongsTo(Discount::class);
    }
}
