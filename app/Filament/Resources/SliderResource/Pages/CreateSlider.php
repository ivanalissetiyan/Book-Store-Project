<?php

namespace App\Filament\Resources\SliderResource\Pages;

use App\Filament\Resources\SliderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateSlider extends CreateRecord
{
    protected static string $resource = SliderResource::class;

    // Redirect to halaman index
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
