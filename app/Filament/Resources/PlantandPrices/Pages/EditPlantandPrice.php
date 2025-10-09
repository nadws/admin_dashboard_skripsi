<?php

namespace App\Filament\Resources\PlantandPrices\Pages;

use App\Filament\Resources\PlantandPrices\PlantandPriceResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditPlantandPrice extends EditRecord
{
    protected static string $resource = PlantandPriceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
