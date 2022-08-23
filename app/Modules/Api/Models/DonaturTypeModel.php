<?php namespace App\Modules\Api\Models;

class DonaturTypeModel extends BaseModel
{
    protected $table = 'donatur_type';
    protected $returnType = 'App\Modules\Api\Entities\DonaturType';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donatur_type.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   
}
