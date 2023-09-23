<?php

namespace App\Modules\Api\Models;

class ProfileModel extends BaseModel
{
    protected $table = 'profile';
    protected $returnType = 'App\Modules\Api\Entities\Profile';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'desa_id',
        'code',
        'address',
        'email',
        'telephone',
        'path_logo',
        'path_image',
        'entity_id',
        'created_at',
        'updated_at',
        'name'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[profile.id,id,{id}]',
        'desa_id' => 'max_length[15]|required',
        'code' => 'max_length[18]',
        'address' => 'max_length[255]|required',
        'email' => 'max_length[50]',
        'telephone' => 'max_length[15]',
        'path_logo' => 'max_length[255]',
        'path_image' => 'max_length[255]',
        'entity_id' => 'numeric|max_length[11]|required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        'name' => 'max_length[255]'
    ];
}
