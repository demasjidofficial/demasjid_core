<?php

namespace App\Modules\Pesantren\Models;

use App\Modules\Api\Models\MateriModel;
use App\Traits\Filterable;

class MateriFilter extends MateriModel
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
