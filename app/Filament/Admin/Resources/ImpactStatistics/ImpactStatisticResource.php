<?php

namespace App\Filament\Admin\Resources\ImpactStatistics;

use App\Filament\Admin\Resources\ImpactStatistics\Pages\CreateImpactStatistic;
use App\Filament\Admin\Resources\ImpactStatistics\Pages\EditImpactStatistic;
use App\Filament\Admin\Resources\ImpactStatistics\Pages\ListImpactStatistics;
use App\Filament\Admin\Resources\ImpactStatistics\Schemas\ImpactStatisticForm;
use App\Filament\Admin\Resources\ImpactStatistics\Tables\ImpactStatisticsTable;
use App\Models\ImpactStatistic;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ImpactStatisticResource extends Resource
{
    protected static ?string $model = ImpactStatistic::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return ImpactStatisticForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ImpactStatisticsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListImpactStatistics::route('/'),
            'create' => CreateImpactStatistic::route('/create'),
            'edit' => EditImpactStatistic::route('/{record}/edit'),
        ];
    }
}
