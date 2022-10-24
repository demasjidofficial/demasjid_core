<?php

namespace App\Modules\Pesantren\Models;

use App\Modules\Api\Models\TahunAjaranModel;
use Bonfire\Traits\Filterable;

class TahunAjaranFilter extends TahunAjaranModel
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
