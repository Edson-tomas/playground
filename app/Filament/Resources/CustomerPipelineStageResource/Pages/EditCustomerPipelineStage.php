<?php

namespace App\Filament\Resources\CustomerPipelineStageResource\Pages;

use App\Filament\Resources\CustomerPipelineStageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCustomerPipelineStage extends EditRecord
{
    protected static string $resource = CustomerPipelineStageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
