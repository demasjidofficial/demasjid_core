<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class AccountBalanceModel extends BaseModel
{
    protected $table = 'account_balance';
    protected $returnType = 'App\Modules\Api\Entities\AccountBalance';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'account',
		'entity_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[account_balance.id,id,{id}]',
		'name' => 'max_length[50]|required',
		'account' => 'max_length[50]|required',
		'entity_id' => 'numeric|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   
}
