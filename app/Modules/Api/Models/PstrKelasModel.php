<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class PstrKelasModel extends BaseModel
{
    protected $table = 'pstr_kelas';
    protected $returnType = 'App\Modules\Api\Entities\PstrKelas';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'pstr_educationlevel_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[pstr_kelas.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'pstr_educationlevel_id' => 'numeric|max_length[11]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]'
    ];   
}
