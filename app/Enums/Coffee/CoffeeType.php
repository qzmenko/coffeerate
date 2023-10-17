<?php

namespace App\Enums\Coffee;

use App\Enums\EnumToArray;
use Filament\Support\Contracts\HasLabel;

enum CoffeeType: string implements HasLabel
{
    use EnumToArray;
    case ARABICA = 'arabica';
    case ROBUSTA = 'robusta';
    case MIX = 'mix';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::ARABICA => __('Arabica'),
            self::ROBUSTA => __('Robusta'),
            self::MIX => __('Mix'),
        };
    }
}
