<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class BmdonationtypeModel extends BaseModel
{
    protected $table = 'bmdonationtype';
    protected $returnType = 'App\Modules\Api\Entities\Bmdonationtype';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'description',
		'uom_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[bmdonationtype.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'description' => 'max_length[255]',
		'uom_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
