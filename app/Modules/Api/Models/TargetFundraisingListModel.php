<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TargetFundraisingListModel extends BaseModel
{
    protected $table = 'target_fundraising';
    protected $returnType = 'App\Modules\Api\Entities\TargetFundraising';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'campaign',
        'donatur',
        'campaign_nama',
        'target_nominal',
        'created_at',
        'updated_at',
        'created_by',
        'updated_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[target_fundraising.id,id,{id}]',
        'campaign' => 'max_length[128]|required',
        'donatur' => 'max_length[128]|required',
        'campaign_nama' => 'max_length[128]|required',
        'target_nominal' => 'numeric|max_length[11]',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        // 'created_by' => 'numeric|max_length[11]',
        'updated_by' => 'numeric|max_length[11]'
    ];
}
