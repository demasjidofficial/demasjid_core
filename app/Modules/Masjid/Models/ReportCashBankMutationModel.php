<?php

namespace App\Modules\Masjid\Models;

use App\Traits\Filterable;
use CodeIgniter\Database\BaseBuilder;
use App\Modules\Api\Models\BalanceModel;
use App\Modules\Masjid\Config\Finance;

class ReportCashBankMutationModel extends BalanceModel
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
