<?php namespace App\Modules\Api\Models;

class DonaturModel extends BaseModel
{
    protected $table = 'donatur';
    protected $returnType = 'App\Modules\Api\Entities\Donatur';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'donatur_type_id',
		'name',
		'email',
		'no_hp',
		'alamat',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donatur.id,id,{id}]',
		'donatur_type_id' => 'numeric|max_length[11]|required',
		'name' => 'max_length[255]|required',
		'email' => 'max_length[50]|required',
		'no_hp' => 'max_length[50]|required',
		'alamat' => 'max_length[100]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   
}
