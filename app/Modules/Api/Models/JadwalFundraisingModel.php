<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class JadwalFundraisingModel extends BaseModel
{
    protected $table = 'jadwal_fundraising';
    protected $returnType = 'App\Modules\Api\Entities\JadwalFundraising';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
		'jadwal_durasi',
		'jadwal_mulai',
		'jadwal_akhir',
		'target_dana',
		'created_at',
		'updated_at'
	
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[jadwal_fundraising.id,id,{id}]',
		'jadwal_durasi' => 'max_length[100]|required',
		'jadwal_mulai' => 'valid_date',
		'jadwal_akhir' => 'valid_date',
		'target_dana' => 'numeric|max_length[11]',
		'created_at' => 'valid_date',
		'updated_at' => 'valid_date',

    ];   
}
