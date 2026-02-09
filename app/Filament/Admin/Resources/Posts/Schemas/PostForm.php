<?php

namespace App\Filament\Admin\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Support\Str;

class PostForm
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

                        Textarea::make('content')
                            ->rows(8)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Media')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->image()
                            ->directory('posts')
                            ->imageEditor(),
                    ]),

                Section::make('Publishing')
                    ->schema([
                        Toggle::make('is_published')
                            ->label('Published')
                            ->default(false),

                        DateTimePicker::make('published_at')
                            ->label('Publish Date')
                            ->nullable(),
                    ])->columns(2),
            ]);
    }
}
