<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class LanguagesModel extends BaseModel
{
    protected $table = 'languages';
    protected $returnType = 'App\Modules\Api\Entities\Languages';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'code',
        'name',
        'path_icon',
        'state',
        'created_at',
        'updated_at',
        'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[languages.id,id,{id}]',
        'code' => 'max_length[255]|required',
        'name' => 'max_length[255]|required',
        'path_icon' => 'max_length[255]',
        'state' => 'max_length[20]',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        //  'created_by' => 'numeric
    ];
}
