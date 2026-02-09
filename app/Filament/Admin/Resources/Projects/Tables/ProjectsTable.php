<?php

namespace App\Filament\Admin\Resources\Projects\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Support\Enums\FontWeight;

class ProjectsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('featured_image')
                    ->square(),

                TextColumn::make('title')
                    ->searchable()
                    ->weight(FontWeight::Bold)
                    ->limit(30),

                TextColumn::make('goal_amount')
                    ->money('GBP', true),

                TextColumn::make('raised_amount')
                    ->money('GBP', true),

                TextColumn::make('progress_percentage')
                    ->label('Progress')
                    ->suffix('%')
                    ->badge(),

                ToggleColumn::make('is_featured'),

                ToggleColumn::make('is_active'),
            ])
            ->filters([
                TernaryFilter::make('is_active'),
                TernaryFilter::make('is_featured'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
