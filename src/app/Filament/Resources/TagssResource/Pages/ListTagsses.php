<?php

namespace App\Filament\Resources\TagssResource\Pages;

use App\Filament\Resources\TagssResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTagsses extends ListRecords
{
    protected static string $resource = TagssResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
