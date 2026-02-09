<?php

namespace App\Filament\Admin\Resources\Testimonials\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make('Testimonial Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('role')
                            ->maxLength(255),

                        TextInput::make('organization')
                            ->nullable()
                            ->maxLength(255),

                        FileUpload::make('photo')
                            ->image()
                            ->disk('public')
                            ->directory('testimonials')
                            ->imageEditor()
                            ->nullable(),

                        Textarea::make('quote')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),

                        Toggle::make('is_featured')
                            ->label('Featured Testimonial')
                            ->default(false),

                        Toggle::make('is_active')
                            ->default(true),
                    ])
                    ->columns(2),
            ]);
    }
}
