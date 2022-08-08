<?php

namespace App\Modules\TPQ\Models;

use App\Modules\Api\Models\BalanceModel;
use Bonfire\Traits\Filterable;

class BalanceFilter extends BalanceModel
{
    use Filterable;

    /**
     * The filters that can be applied to
     * lists of Users.
     *
     * @var array
     */
    protected $filters = [];

    /**
     * Provides filtering functionality.
     *
     * @param array $params
     *
     * @return UserFilter
     */
    public function filter(array $params = null)
    {
        return [];
    }
}
