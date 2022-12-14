<?php

namespace App\Modules\Api\Models;


class PelajaranModel extends BaseModel
{
    protected $table = 'periode';
    // protected $returnType = 'App\Modules\Api\Entities\Pelajaran';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'name',
        'created_at',
        'updated_at',
        'created_by'
    ];
    
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[pelajaran.id,id,{id}]',
        'name' => 'max_length[60]|required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        // 'created_by' => 'numeric|max_length[11]'
    ];
}
