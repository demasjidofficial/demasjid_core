<?php

namespace App\Modules\BaitulMal\Models;

use App\Modules\Api\Models\DonasiModel;
use App\Traits\Filterable;

class DonasiFilter extends DonasiModel
{
    use Filterable;
    protected $table = 'donasi';
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
