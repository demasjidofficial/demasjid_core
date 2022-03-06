<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class AuthLoginsModel extends BaseModel
{
    protected $table = 'auth_logins';
    protected $returnType = 'App\Modules\Api\Entities\AuthLogins';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'ip_address',
		'user_agent',
		'email',
		'user_id',
		'date',
		'success'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[auth_logins.id,id,{id}]',
		'ip_address' => 'max_length[255]',
		'user_agent' => 'max_length[255]',
		'email' => 'max_length[255]',
		'user_id' => 'numeric',
		'date' => 'valid_date|required',
		'success' => 'numeric|max_length[1]|required'
    ];   
}
