<?php

namespace App\Modules\Room\Models;

use App\Modules\Api\Models\InfaqRoomModel;
use Bonfire\Traits\Filterable;

class InfaqRoomFilter extends InfaqRoomModel
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
