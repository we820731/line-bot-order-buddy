<?php

namespace App\Filament\Resources\LineServiceResource\Pages;

use App\Filament\Resources\LineServiceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLineServices extends ListRecords
{
    protected static string $resource = LineServiceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
