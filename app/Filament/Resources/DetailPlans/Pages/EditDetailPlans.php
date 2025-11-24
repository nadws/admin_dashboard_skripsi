<?php

namespace App\Filament\Resources\DetailPlans\Pages;

use App\Filament\Resources\DetailPlans\DetailPlansResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDetailPlans extends EditRecord
{
    protected static string $resource = DetailPlansResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
