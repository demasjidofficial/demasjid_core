<?php namespace App\Modules\Api\Models;

class DonaturModel extends BaseModel
{
    protected $table = 'donatur';
    protected $returnType = 'App\Modules\Api\Entities\Donatur';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'id_kategori',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by',
		
		// 'donatur_type_id',
		// 'name',
		// 'email',
		// 'no_hp',
		// 'alamat',
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[donatur.id,id,{id}]',
		'name' => 'max_length[128]|required',
		'id_kategori' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]',
		'updated_by' => 'numeric|max_length[11]'
    ];   
}
