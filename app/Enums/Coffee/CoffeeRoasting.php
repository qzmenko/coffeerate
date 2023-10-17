<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum CoffeeRoasting: string implements HasLabel
{
    use EnumToArray;
    case LIGHT = 'light';
    case MEDIUM = 'medium';
    case DARK = 'dark';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::LIGHT => __('Light'),
            self::MEDIUM => __('Medium'),
            self::DARK => __('Dark'),
        };
    }
}
