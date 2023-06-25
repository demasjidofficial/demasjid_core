<?php

namespace App\Modules\Pesantren\Models;

use App\Modules\Api\Models\PendaftaranModel;
use App\Traits\Filterable;

class PendaftaranFilter extends PendaftaranModel
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
