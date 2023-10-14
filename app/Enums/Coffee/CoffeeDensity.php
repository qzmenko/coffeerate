<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;

enum CoffeeDensity: string
{
    use EnumToArray;
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
}
