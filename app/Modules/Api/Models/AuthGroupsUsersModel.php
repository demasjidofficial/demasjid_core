<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class AuthGroupsUsersModel extends BaseModel
{
    protected $table = 'auth_groups_users';
    protected $returnType = 'App\Modules\Api\Entities\AuthGroupsUsers';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'user_id',
		'group',
		'created_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[auth_groups_users.id,id,{id}]',
		'user_id' => 'numeric|required',
		'group' => 'max_length[255]|required',
		'created_at' => 'valid_date|required'
    ];   
}
