<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class BminfaqshodaqohModel extends BaseModel
{
    protected $table = 'bminfaqshodaqoh';
    protected $returnType = 'App\Modules\Api\Entities\Bminfaqshodaqoh';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'label',
		'needed_funds',
		'collected_funds',
		'path_image',
		'description',
		'program_id',
		'category_id',
		'donationtype_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[bminfaqshodaqoh.id,id,{id}]',
		'name' => 'max_length[128]|required',
		'label' => 'max_length[255]|required',
		'needed_funds' => 'decimal|max_length[10]',
		'collected_funds' => 'decimal|max_length[10]',
		'path_image' => 'max_length[255]',
		'description' => 'required',
		'program_id' => 'numeric',
		'category_id' => 'numeric',
		'donationtype_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
