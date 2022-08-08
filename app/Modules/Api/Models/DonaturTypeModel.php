<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class DonaturTypeModel extends BaseModel
{
    protected $table = 'donatur_type';
    protected $returnType = 'App\Modules\Api\Entities\DonaturType';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'type',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donatur_type.id,id,{id}]',
		'type' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]'
    ];   
}
