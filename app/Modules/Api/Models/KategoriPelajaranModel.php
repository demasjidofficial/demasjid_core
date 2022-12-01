<?php namespace App\Modules\Api\Models;

class KategoriPelajaranModel extends BaseModel
{
    protected $table = 'kategori_pelajaran';
    protected $returnType = 'App\Modules\Api\Entities\KategoriPelajaran';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'description',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[kategori_pelajaran.id,id,{id}]',
		'name' => 'max_length[60]|required',
		'description' => 'max_length[255]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
