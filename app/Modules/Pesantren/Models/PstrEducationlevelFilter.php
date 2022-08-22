<?php

namespace App\Modules\Pesantren\Models;

use App\Modules\Api\Models\PstrEducationlevelModel;
use Bonfire\Traits\Filterable;

class PstrEducationlevelFilter extends PstrEducationlevelModel
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
