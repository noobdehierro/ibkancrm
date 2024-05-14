<?php

namespace LeanCommerce\Debtor\Repositories;

use Webkul\Core\Eloquent\Repository;

class DebtorRepository extends Repository
{
    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'LeanCommerce\Debtor\Contracts\Debtor';
    }
}