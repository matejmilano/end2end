<?php

namespace App\Filament\Resources\ContractLenghtResource\Pages;

use App\Filament\Resources\ContractLenghtResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContractLenght extends EditRecord
{
    protected static string $resource = ContractLenghtResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
