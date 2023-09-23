<?php

namespace App\Modules\Api\Models;

class SettingsModel extends BaseModel
{
    protected $table = 'settings';
    protected $returnType = 'App\Modules\Api\Entities\Settings';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'class',
        'key',
        'value',
        'type',
        'context',
        'created_at',
        'updated_at'
    ];
    protected $validationRules = [
        // 'id' => 'numeric|required|is_unique[settings.id,id,{id}]',
        'class' => 'max_length[255]|required',
        'key' => 'max_length[255]|required',
        'type' => 'max_length[31]|required',
        'context' => 'max_length[255]',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required'
    ];
}
