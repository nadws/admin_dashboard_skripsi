<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPlans extends Model
{
    public function plantsPricing()
    {
        return $this->belongsTo(PlantsPricing::class, 'plants_pricings_id');
    }
}
