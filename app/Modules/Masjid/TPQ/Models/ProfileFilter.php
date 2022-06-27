<?php

namespace App\Modules\TPQ\Models;

use App\Modules\Api\Models\ProfileModel;
use Bonfire\Traits\Filterable;

class ProfileFilter extends ProfileModel
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
