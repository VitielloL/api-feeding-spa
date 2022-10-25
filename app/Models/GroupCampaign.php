<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupCampaign extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'product_id'
    ];

    public function groups()
    {
        return $this->hasMany(CityGroup::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
