<?php

namespace App\Enums;

use Cerbero\Enum\Concerns\Enumerates;

enum Period: string
{
    use Enumerates;

    case DAILY = 'Daily';
    case WEEKLY = 'Weekly';
    case MONTHLY = 'Monthly';
    case SEMI_ANNUALLY = 'Every half a year';
    case ANNUALLY = 'Annually';
}
