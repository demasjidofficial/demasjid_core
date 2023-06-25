<?php namespace App\Modules\Api\Models;

class SitefooterModel extends BaseModel
{
    protected $table = 'sitefooter';
    protected $returnType = 'App\Modules\Api\Entities\Sitefooter';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'title',
		'content',
		'language_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[sitefooter.id,id,{id}]',
		'title' => 'max_length[255]|required',
		'content' => 'required',
		'language_id' => 'numeric|max_length[11]',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
