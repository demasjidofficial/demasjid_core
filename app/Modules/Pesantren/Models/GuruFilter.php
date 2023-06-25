<?php

namespace App\Modules\Pesantren\Models;

use App\Modules\Api\Models\GuruModel;
use App\Traits\Filterable;

class GuruFilter extends GuruModel
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
