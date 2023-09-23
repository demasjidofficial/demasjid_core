<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class ProgramCategoryModel extends BaseModel
{
    protected $table = 'program_category';
    protected $returnType = 'App\Modules\Api\Entities\ProgramCategory';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'name',
        'created_at',
        'updated_at'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[program_category.id,id,{id}]',
        'name' => 'max_length[50]|required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required'
    ];
}
