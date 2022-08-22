<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class PstrEducationlevelModel extends BaseModel
{
    protected $table = 'pstr_educationlevel';
    protected $returnType = 'App\Modules\Api\Entities\PstrEducationlevel';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[pstr_educationlevel.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
