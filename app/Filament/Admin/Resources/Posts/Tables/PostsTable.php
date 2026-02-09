<?php

namespace App\Filament\Admin\Resources\Posts\Tables;

use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Support\Enums\FontWeight;

class PostsTable
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
                    ->limit(40),

                ToggleColumn::make('is_published'),

                TextColumn::make('published_at')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                TernaryFilter::make('is_published'),
            ])
            ->defaultSort('created_at', 'desc');
    }
}
