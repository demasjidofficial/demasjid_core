<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TingkatPendidikanModel extends BaseModel
{
    protected $table = 'tingkat_pendidikan';
    protected $returnType = 'App\Modules\Api\Entities\TingkatPendidikan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[tingkat_pendidikan.id,id,{id}]',
		'name' => 'max_length[25]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
