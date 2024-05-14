<?php

namespace LeanCommerce\Debtor\Models;

use Illuminate\Database\Eloquent\Model;
use LeanCommerce\Debtor\Contracts\Debtor as DebtorContract;

class Debtor extends Model implements DebtorContract
{
    protected $fillable = [
        'access_code',
        'credit_number',
        'full_name',
        'status',
        'remainingDebt',
        'nextPayday',
        'sce',
        'minimum_to_collect',
        'cash',
        'nameInCash',
        'one_three_months',
        'nameInOne_threeMonths',
        'four_six_months',
        'nameInFour_sixMonths',
        'seven_twelve_months',
        'nameInSeven_twelveMonths',
        'thirteen_eighteen_months',
        'nameInThirteen_eighteenMonths',
        'nineteen_twentyfour_months',
        'nameInNineteen_twentyfourMonths',
        'payment_reference',
        'agreement',
        'payment_bank',
        'payment_bank_full_name',
        'interbank_key',
        'product',
        'phone',
        'email',
        'portfolio',
        'phone_1',
        'phone_2',
        'origin_bank',
        'status_id',
    ];
}
