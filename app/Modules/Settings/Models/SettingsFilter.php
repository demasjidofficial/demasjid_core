<?php

namespace App\Modules\Settings\Models;

use App\Modules\Api\Models\SettingsModel;
use App\Traits\Filterable;

class SettingsFilter extends SettingsModel
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