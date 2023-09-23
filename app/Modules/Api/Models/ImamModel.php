<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;
use CodeIgniter\Database\BaseBuilder;

class ImamModel extends BaseModel
{
    protected $table = 'imam';
    protected $returnType = 'App\Modules\Api\Entities\Imam';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'name',
        'contact',
        'address',
        'description',
        'is_permanent',
        'is_khotib',
        'created_at',
        'updated_at',
        'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[imam.id,id,{id}]',
        'name' => 'max_length[60]|required',
        'contact' => 'max_length[60]',
        'address' => 'max_length[100]',
        'description' => 'required',
        // 'is_permanent' => 'bool',
        // 'is_khotib' => 'bool',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        //  'created_by' => 'numeric'
    ];

    public function permanent()
    {
        $this->where('is_permanent', true);
        return $this;
    }

    public function khotib()
    {
        $this->where('is_khotib', true);
        return $this;
    }
}
