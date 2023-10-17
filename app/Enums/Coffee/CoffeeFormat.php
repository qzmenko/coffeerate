<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum CoffeeFormat: string implements HasLabel
{
    use EnumToArray;
    case BEANS = 'beans';

    case GROUND = 'ground';
    case CAPSULES = 'capsules';
    case DRIP = 'drip';
    case INSTANT = 'instant';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::BEANS => __('Beans'),
            self::GROUND => __('Ground'),
            self::CAPSULES => __('Capsules'),
            self::DRIP => __('Drip'),
            self::INSTANT => __('Instant'),
        };
    }
}
