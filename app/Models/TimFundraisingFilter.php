<?php

namespace App\Models;

use App\Modules\Api\Models\TimFundraisingModel;
use Bonfire\Traits\Filterable;

class TimFundraisingFilter extends TimFundraisingModel
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
