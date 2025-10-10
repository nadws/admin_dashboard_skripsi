<?php

namespace App\Filament\Resources\PlantandPrices\Pages;

use App\Filament\Resources\PlantandPrices\PlantandPriceResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePlantandPrice extends CreateRecord
{
    protected static string $resource = PlantandPriceResource::class;

    // 🟢 Tambahkan method ini
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
