<?php

namespace App\Modules\Website\Models;

use App\Modules\Api\Models\SitesectionsModel;
use App\Traits\Filterable;

class SitesectionsFilter extends SitesectionsModel
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
