<?php

namespace App\Modules\Website\Models;

use App\Modules\Api\Models\SiteslidersModel;
use Bonfire\Traits\Filterable;

class SiteslidersFilter extends SiteslidersModel
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
