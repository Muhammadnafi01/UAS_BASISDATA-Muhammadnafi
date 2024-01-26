<?php

namespace App\Filament\Resources\TagssResource\Pages;

use App\Filament\Resources\TagssResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTagss extends EditRecord
{
    protected static string $resource = TagssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
