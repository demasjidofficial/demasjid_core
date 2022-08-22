<?php

namespace App\Modules\Board\Models;

use App\Modules\Api\Models\BoardNewsRuntextModel;
use Bonfire\Traits\Filterable;

class BoardNewsRuntextFilter extends BoardNewsRuntextModel
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
