<?php

namespace App\Filament\Admin\Resources\ImpactStatistics\Pages;

use App\Filament\Admin\Resources\ImpactStatistics\ImpactStatisticResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListImpactStatistics extends ListRecords
{
    protected static string $resource = ImpactStatisticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
