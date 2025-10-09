<?php

namespace App\Filament\Resources\PlantandPrices\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class PlantandPriceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama Paket')
                    ->required()
                    ->maxLength(100),
                TextInput::make('subname')
                    ->label('Nama Sub Paket')
                    ->required()
                    ->maxLength(100),
            ]);
    }
}
