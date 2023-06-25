<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class CampaignsModel extends BaseModel
{
    protected $table = 'campaigns';
    protected $returnType = 'App\Modules\Api\Entities\Campaigns';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'id_program',
		'status',
		'is_active',
		'is_delete',
		'created_at',
		'updated_at',
		'created_by',
		'create_date',
		'modified_by',
		'modified_date'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[campaigns.id,id,{id}]',
		'id_program' => 'numeric|max_length[11]|required',
		'status' => 'max_length[10]',
		'is_active' => 'max_length[5]',
		'is_delete' => 'max_length[5]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]',
		'create_date' => 'valid_date|required',
		'modified_by' => 'numeric|max_length[11]',
		'modified_date' => 'valid_date|required'
    ];   
}
