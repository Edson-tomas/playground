<?php

namespace App\Filament\Resources\CustomerPipelineStageResource\Pages;

use App\Filament\Resources\CustomerPipelineStageResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCustomerPipelineStage extends CreateRecord
{
    protected static string $resource = CustomerPipelineStageResource::class;
}
