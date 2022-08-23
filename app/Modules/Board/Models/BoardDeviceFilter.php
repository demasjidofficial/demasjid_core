<?php

namespace App\Modules\Board\Models;

use App\Modules\Api\Models\BoardDeviceModel;
use Bonfire\Traits\Filterable;

class BoardDeviceFilter extends BoardDeviceModel
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
