<?php

namespace App\Filament\Resources\PlantandPrices\Tables;

use App\Models\PlantsPricing;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class PlantandPricesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable(),
                TextColumn::make('name')->sortable(),
                TextColumn::make('subname')->sortable(),
            ])
            ->filters([
                SelectFilter::make('name')
                    ->label('Nama')
                    ->options(
                        PlantsPricing::query()
                            ->pluck('name', 'name') // 🟢 key dan value sama
                            ->toArray()
                    ),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
