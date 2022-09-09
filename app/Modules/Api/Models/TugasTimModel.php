<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TugasTimModel extends BaseModel
{
    protected $table = 'tugas_tim';
    protected $returnType = 'App\Modules\Api\Entities\TugasTim';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'staff_id',
		'tugas',
		'nominal',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by',
		'progres'
    ];
    protected $validationRules = [
      
    ];   
}
