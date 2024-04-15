<?php

namespace App\Filament\Resources\LineServiceResource\Pages;

use App\Filament\Resources\LineServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLineService extends EditRecord
{
    protected static string $resource = LineServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
