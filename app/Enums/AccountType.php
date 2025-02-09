<?php

namespace App\Enums;

enum AccountType: string
{
    case ASSET            = 'Asset account';
    case BENEFICIARY      = 'Beneficiary account';
    case CASH             = 'Cash account';
    case CREDIT_CARD       = 'Credit card';
    case DEBT             = 'Debt';
    case DEFAULT          = 'Default account';
    case EXPENSE          = 'Expense account';
    case IMPORT           = 'Import account';
    case INITIAL_BALANCE  = 'Initial balance account';
    case LIABILITY_CREDIT = 'Liability credit account';
    case LOAN             = 'Loan';
    case MORTGAGE         = 'Mortgage';
    case RECONCILIATION   = 'Reconciliation account';
    case REVENUE          = 'Revenue account';
}
