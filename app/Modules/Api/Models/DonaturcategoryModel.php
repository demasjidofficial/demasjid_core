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
	
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donaturcategory.id,id,{id}]',
		'name' => 'max_length[128]|required',

    ];   
}
