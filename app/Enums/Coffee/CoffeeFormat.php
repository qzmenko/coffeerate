<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;

enum CoffeeFormat: string
{
    use EnumToArray;
    case BEANS = 'beans';

    case GROUND = 'ground';
    case CAPSULES = 'capsules';
    case DRIP = 'drip';
    case INSTANT = 'instant';
}
