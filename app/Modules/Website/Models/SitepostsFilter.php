<?php

namespace App\Modules\Website\Models;

use App\Modules\Api\Models\SitepostsModel;
use Bonfire\Traits\Filterable;

class SitepostsFilter extends SitepostsModel
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
