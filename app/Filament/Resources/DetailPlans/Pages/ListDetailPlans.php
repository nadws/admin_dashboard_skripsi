<?php

namespace App\Filament\Resources\DetailPlans\Pages;

use App\Filament\Resources\DetailPlans\DetailPlansResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDetailPlans extends ListRecords
{
    protected static string $resource = DetailPlansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
