<?php

namespace App\Filament\Resources\EmployeeResource\Widgets;

use App\Models\Contract;
use App\Models\Employees;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class EmployeeStatsOverview extends BaseWidget
{
    protected function getCards(): array
    {

        $full = Contract::where('type', 'Neodređeno')->withCount('employees')->first();
        $part = Contract::where('type', 'Određeno')->withCount('employees')->first();


        return [
            Card::make('All Employees', Employees::all()->count()),
            Card::make('Full Time', $full ? $full->employees_count : 0),
            Card::make('Part Time', $part ? $part->employees_count : 0),
        ];
    }
}
