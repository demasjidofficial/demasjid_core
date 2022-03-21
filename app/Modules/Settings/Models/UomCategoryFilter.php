<?php

namespace App\Modules\Settings\Models;

use App\Modules\Api\Models\UomCategoryModel;
use Bonfire\Traits\Filterable;

class UomCategoryFilter extends UomCategoryModel
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
