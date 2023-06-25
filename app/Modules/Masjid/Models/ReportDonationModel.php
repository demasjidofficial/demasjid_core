<?php

namespace App\Modules\Masjid\Models;

use App\Traits\Filterable;
use CodeIgniter\Database\BaseBuilder;
use App\Modules\Api\Models\BalanceModel;
use App\Modules\Masjid\Config\Finance;

class ReportDonationModel extends BalanceModel
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

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $finance = new Finance;        
        $this->whereIn('chart_of_account_id', function(BaseBuilder $builder) use($finance) {            
            return $builder->select('id')->from('chart_of_account')->whereIn('code',$finance->donationAccount);
        });

        return parent::findAll($limit, $offset);
    }
}
