<?php

namespace App\Modules\BaitulMal\Models;

use App\Modules\Api\Models\TargetFundraisingModel;
use Bonfire\Traits\Filterable;

class TargetFundraisingFilter extends TargetFundraisingModel
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
