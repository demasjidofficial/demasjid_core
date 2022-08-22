<?php

namespace App\Modules\Board\Models;

use App\Modules\Api\Models\BoardNewsBgModel;
use Bonfire\Traits\Filterable;

class BoardNewsBgFilter extends BoardNewsBgModel
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
