<?php

namespace App\Filament\Resources\CoffeeResource\Pages;

use App\Filament\Resources\CoffeeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCoffee extends CreateRecord
{
    protected static string $resource = CoffeeResource::class;
}
