<?php

namespace App\Modules\BaitulMal\Models;

use App\Modules\Api\Models\CampaignsModel;
use Bonfire\Traits\Filterable;

class CampaignsFilter extends CampaignsModel
{
    use Filterable;
    protected $table = 'campaigns';

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
