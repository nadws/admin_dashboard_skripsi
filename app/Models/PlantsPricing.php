<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlantsPricing extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subname',

    ];

    public function detailPlans()
    {
        return $this->hasMany(DetailPlans::class, 'plants_pricings_id');
    }
}
