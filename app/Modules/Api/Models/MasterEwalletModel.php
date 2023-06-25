<?php namespace App\Modules\Api\Models;

class MasterEwalletModel extends BaseModel
{
    protected $table = 'master_ewallet';
    protected $returnType = 'App\Modules\Api\Entities\MasterEwallet';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'logo',
		'nama_ewallet',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[master_ewallet.id,id,{id}]',
		'logo' => 'max_length[255]',
		'nama_ewallet' => 'max_length[100]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
