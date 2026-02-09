<?php

namespace App\Filament\Admin\Resources\ImpactStatistics\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class ImpactStatisticsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('label')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('value'),

                TextColumn::make('suffix'),

                TextColumn::make('order_column')
                    ->sortable(),

                ToggleColumn::make('is_active'),
            ])
            ->defaultSort('order_column', 'asc');
    }
}
