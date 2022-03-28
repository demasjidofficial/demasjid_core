<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class ProgramCostModel extends BaseModel
{
    protected $table = 'program_cost';
    protected $returnType = 'App\Modules\Api\Entities\ProgramCost';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'program_id',
		'name',
		'cost_estimate',
		'cost_actual',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[program_cost.id,id,{id}]',
		'program_id' => 'numeric|required',
		'name' => 'max_length[150]|required',
		'cost_estimate' => 'numeric|required',
		'cost_actual' => 'numeric',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   
}
