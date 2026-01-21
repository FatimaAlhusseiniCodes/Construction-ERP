<?php

namespace App\Filament\App\Resources\DailyLogResource\Pages;

use App\Filament\App\Resources\DailyLogResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDailyLog extends EditRecord
{
    protected static string $resource = DailyLogResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
