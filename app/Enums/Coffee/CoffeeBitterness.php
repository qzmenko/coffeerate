<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;

enum CoffeeBitterness: string
{
    use EnumToArray;
    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';
}
