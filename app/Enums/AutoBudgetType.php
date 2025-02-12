<?php

declare(strict_types=1);

namespace App\Enums;

use Cerbero\Enum\Concerns\Enumerates;

enum AutoBudgetType: int
{
    use Enumerates;

    case NONE = 0;
    case RESETS_PERIODICALLY = 1;
    case GROWS_PERIODICALLY = 2;
    case ADJUSTS_FOR_EXPENSES_PERIODICALLY = 3;

    public function description(): string
    {
        return match ($this) {
            self::NONE => 'None',
            self::RESETS_PERIODICALLY => 'Sets a fixed amount every period',
            self::GROWS_PERIODICALLY => 'Stack up budget savings every period',
            self::ADJUSTS_FOR_EXPENSES_PERIODICALLY => 'Adds an amount every period and adjusts for overspending'
        };
    }
}
