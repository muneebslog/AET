<?php

namespace App\Filament\Admin\Resources\ImpactStatistics\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;

class ImpactStatisticForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Statistic Details')
                    ->schema([
                        TextInput::make('label')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('value')
                            ->required()
                            ->helperText('Displayed value (e.g. 12,482)'),

                        TextInput::make('numeric_value')
                            ->numeric()
                            ->nullable()
                            ->helperText('Used for counter animations'),

                        TextInput::make('suffix')
                            ->maxLength(10)
                            ->nullable()
                            ->helperText('Example: + or %'),

                        TextInput::make('order_column')
                            ->numeric()
                            ->default(0),

                        Toggle::make('is_active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
