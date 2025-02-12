<?php

declare(strict_types=1);

namespace Apps\Enums;

enum TransactionType: string
{
    case DEPOSIT = 'Deposit';
    case INVALID = 'Invalid';
    case LIABILITY_CREDIT = 'Liability credit';
    case OPENING_BALANCE = 'Opening balance';
    case RECONCILIATION = 'Reconciliation';
    case TRANSFER = 'Transfer';
    case WITHDRAWAL = 'Withdrawal';
}
