<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class EntityModel extends BaseModel
{
    protected $table = 'entity';
    protected $returnType = 'App\Modules\Api\Entities\Entity';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'type',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[entity.id,id,{id}]',
		'name' => 'max_length[50]|required',
		'type' => 'max_length[20]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric'
    ];   

    const TYPE = [
        'masjid' => 'Masjid',
        'pesantren' => 'Pesantren',
        'sekolah' => 'Sekolah',
        'tpq'     => 'TPQ'  
    ];
}
