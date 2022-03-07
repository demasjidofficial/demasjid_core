<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class SitepagesModel extends BaseModel
{
    protected $table = 'sitepages';
    protected $returnType = 'App\Modules\Api\Entities\Sitepages';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'title',
		'subtitle',
		'path_image',
		'content',
		'permalink',
		'meta_title',
		'meta_desc',
		'sitemenu_id',
		'language_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[sitepages.id,id,{id}]',
		'title' => 'max_length[255]|required',
		'subtitle' => 'max_length[255]|required',
		'path_image' => 'max_length[255]',
		'content' => 'required',
		'permalink' => 'max_length[255]|required',
		'meta_title' => 'max_length[255]|required',
		'meta_desc' => 'required',
		'sitemenu_id' => 'numeric',
		'language_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
