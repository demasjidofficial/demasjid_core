<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TargetFundraisingModel extends BaseModel
{
    protected $table = 'target_fundraising';
    protected $returnType = 'App\Modules\Api\Entities\TargetFundraising';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'campaign',
		'donatur',
		'target_nominal',
		'tipe_donasi',
		'jadwal_mulai',
		'jadwal_akhir',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[target_fundraising.id,id,{id}]',
		'campaign' => 'numeric|max_length[11]|required',
		'donatur' => 'max_length[128]|required',
	

    ];   
}
