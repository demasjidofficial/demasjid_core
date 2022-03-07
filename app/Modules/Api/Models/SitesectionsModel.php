<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class SitesectionsModel extends BaseModel
{
    protected $table = 'sitesections';
    protected $returnType = 'App\Modules\Api\Entities\Sitesections';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'title',
		'subtitle',
		'content',
		'sequence',
		'sitepage_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[sitesections.id,id,{id}]',
		'title' => 'max_length[255]|required',
		'subtitle' => 'max_length[255]|required',
		'content' => 'required',
		'sequence' => 'numeric',
		'sitepage_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
