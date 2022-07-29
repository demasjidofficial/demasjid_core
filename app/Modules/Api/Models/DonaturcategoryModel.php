<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class DonaturcategoryModel extends BaseModel
{
    protected $table = 'donaturcategory';
    protected $returnType = 'App\Modules\Api\Entities\Donaturcategory';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'label',
		'path_image',
		'description',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donaturcategory.id,id,{id}]',
		'name' => 'max_length[128]|required',
		'label' => 'max_length[255]|required',
		'path_image' => 'max_length[255]',
		'description' => 'required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]',
		'updated_by' => 'numeric|max_length[11]'
    ];   
}
