<?php

namespace App\Filament\Admin\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Support\Str;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Basic Information')
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn ($state, callable $set) =>
                                $set('slug', Str::slug($state))
                            ),

                        TextInput::make('slug')
                            ->required()
                            ->unique(ignoreRecord: true),

                        Textarea::make('excerpt')
                            ->rows(3)
                            ->columnSpanFull(),

                        Textarea::make('description')
                            ->rows(6)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Financials')
                    ->schema([
                        TextInput::make('goal_amount')
                            ->numeric()
                            ->prefix('£')
                            ->required(),

                        TextInput::make('raised_amount')
                            ->numeric()
                            ->prefix('£')
                            ->default(0),
                    ])->columns(2),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->image()
                            ->directory('projects')
                            ->imageEditor(),
                    ]),

                Section::make('Settings')
                    ->schema([
                        Toggle::make('is_featured')
                            ->label('Featured Appeal'),

                        Toggle::make('is_active')
                            ->default(true),

                        DateTimePicker::make('published_at')
                            ->label('Publish Date'),
                    ])->columns(3),
            ]);
    }
}
