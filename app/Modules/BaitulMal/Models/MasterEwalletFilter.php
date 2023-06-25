<?php

namespace App\Modules\BaitulMal\Models;

use App\Modules\Api\Models\MasterEwalletModel;
use App\Traits\Filterable;

class MasterEwalletFilter extends MasterEwalletModel
{
    use Filterable;
    protected $table = 'master_ewallet';
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
