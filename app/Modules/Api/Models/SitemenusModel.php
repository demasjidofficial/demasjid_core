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
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[sitemenus.id,id,{id}]',
		'name' => 'max_length[128]|required',
		'label' => 'max_length[255]|required',
		'parent' => 'numeric',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   
}
