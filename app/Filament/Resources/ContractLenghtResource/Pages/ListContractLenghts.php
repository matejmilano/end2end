<?php

namespace App\Filament\Resources\ContractLenghtResource\Pages;

use App\Filament\Resources\ContractLenghtResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContractLenghts extends ListRecords
{
    protected static string $resource = ContractLenghtResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
