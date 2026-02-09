<?php

namespace App\Filament\Admin\Resources\Subscribers;


use App\Models\Subscriber;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class SubscriberResource extends Resource
{
    protected static ?string $model = Subscriber::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-envelope';


    protected static ?string $navigationLabel = 'Subscribers';

    protected static ?string $recordTitleAttribute = 'email';

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('created_at')
                    ->label('Subscribed On')
                    ->dateTime()
                    ->sortable(),
            ])
            // ->actions([
            //     DeleteAction::make(),
            // ])
            // ->bulkActions([
            //     DeleteAction::make(),
            // ])
            ->defaultSort('created_at', 'desc');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSubscribers::route('/'),
        ];
    }
}
