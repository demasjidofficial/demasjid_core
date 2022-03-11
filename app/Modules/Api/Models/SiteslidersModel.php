<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class SiteslidersModel extends BaseModel
{
    protected $table = 'sitesliders';
    protected $returnType = 'App\Modules\Api\Entities\Sitesliders';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'path_image',
		'content',
		'sequence',
		'sitepage_id',
		'language_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[sitesliders.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'path_image' => 'max_length[255]',
		'content' => 'required',
		'sequence' => 'numeric',
		'sitepage_id' => 'numeric',
		'language_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
