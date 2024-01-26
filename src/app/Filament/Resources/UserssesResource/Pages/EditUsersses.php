<?php

namespace App\Filament\Resources\UserssesResource\Pages;

use App\Filament\Resources\UserssesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUsersses extends EditRecord
{
    protected static string $resource = UserssesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
