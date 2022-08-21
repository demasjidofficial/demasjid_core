<?php namespace App\Modules\Api\Models;

class MasterBankModel extends BaseModel
{
    protected $table = 'master_bank';
    protected $returnType = 'App\Modules\Api\Entities\MasterBank';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [

        'logo',
		'bank',

        'path_logo',
		'name',

		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[master_bank.id,id,{id}]',

		'bank' => 'max_length[50]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'

		'path_logo' => 'max_length[255]',
        'name' => 'max_length[50]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',

    ];   
}
