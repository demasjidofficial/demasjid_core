<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class SitemenusModel extends BaseModel
{
    protected $table = 'sitemenus';
    protected $returnType = 'App\Modules\Api\Entities\Sitemenus';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'label',
		'parent',
		'language_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[sitemenus.id,id,{id}]',
		'name' => 'max_length[128]|required',
		'label' => 'max_length[255]|required',
		'parent' => 'numeric',
		'language_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
