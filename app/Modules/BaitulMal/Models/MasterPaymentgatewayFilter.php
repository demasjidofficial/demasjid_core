<?php

namespace App\Modules\BaitulMal\Models;

use App\Modules\Api\Models\MasterPaymentgatewayModel;
use App\Traits\Filterable;

class MasterPaymentgatewayFilter extends MasterPaymentgatewayModel
{
    use Filterable;
    protected $table = 'master_paymentgateway';

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
