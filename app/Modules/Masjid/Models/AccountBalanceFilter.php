<?php

namespace App\Modules\Masjid\Models;

use App\Modules\Api\Models\AccountBalanceModel;
use Bonfire\Traits\Filterable;

class AccountBalanceFilter extends AccountBalanceModel
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
