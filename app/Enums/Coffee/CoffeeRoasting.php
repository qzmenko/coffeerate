<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;

enum CoffeeRoasting: string
{
    use EnumToArray;
    case LIGHT = 'light';
    case MEDIUM = 'medium';
    case DARK = 'dark';
}
