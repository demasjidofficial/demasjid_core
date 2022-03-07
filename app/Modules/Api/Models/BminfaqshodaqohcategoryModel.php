<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class BminfaqshodaqohcategoryModel extends BaseModel
{
    protected $table = 'bminfaqshodaqohcategory';
    protected $returnType = 'App\Modules\Api\Entities\Bminfaqshodaqohcategory';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'label',
		'description',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[bminfaqshodaqohcategory.id,id,{id}]',
		'name' => 'max_length[128]|required',
		'label' => 'max_length[255]|required',
		'description' => 'required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
