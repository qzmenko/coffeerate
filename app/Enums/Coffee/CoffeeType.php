<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;

enum CoffeeType: string
{
    use EnumToArray;
    case ARABICA = 'arabica';
    case ROBUSTA = 'robusta';
    case MIX = 'mix';
}
