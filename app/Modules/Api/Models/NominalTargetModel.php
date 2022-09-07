<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class NominalTargetModel extends BaseModel
{
    protected $table = 'nominal_target';
    protected $returnType = 'App\Modules\Api\Entities\NominalTarget';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'staff_id',
		'terkumpul_nominal',
		'target_nominal',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[nominal_target.id,id,{id}]',
		'staff_id' => 'numeric|max_length[11]|required',
		'terkumpul_nominal' => 'numeric|max_length[11]|required',
		'target_nominal' => 'numeric|max_length[11]',
		'created_by' => 'max_length[100]',
		'updated_by' => 'max_length[100]'
    ];   
}
