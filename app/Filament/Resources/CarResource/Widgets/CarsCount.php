<?php

namespace App\Filament\Resources\CarResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Car;

class CarsCount extends BaseWidget
{
    protected function getStats(): array
    {
        $remainingCars = Car::where('state_id', 1)->count();
        $currentCars = Car::whereDate('created_at', now()->toDateString())->count();
        return [
            Stat::make('Remaining', $remainingCars),
            Stat::make('Count', $currentCars)
        ];
    }
}
