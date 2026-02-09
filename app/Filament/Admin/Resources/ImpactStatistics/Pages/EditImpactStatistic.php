<?php

namespace App\Filament\Admin\Resources\ImpactStatistics\Pages;

use App\Filament\Admin\Resources\ImpactStatistics\ImpactStatisticResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditImpactStatistic extends EditRecord
{
    protected static string $resource = ImpactStatisticResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
