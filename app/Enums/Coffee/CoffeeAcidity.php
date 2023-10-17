<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum CoffeeAcidity: string implements HasLabel
{
    use EnumToArray;

    case LOW = 'low';
    case MEDIUM = 'medium';
    case HIGH = 'high';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::LOW => __('Low'),
            self::MEDIUM => __('Medium'),
            self::HIGH => __('High'),
        };
    }
}
