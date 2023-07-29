<?php namespace App\Modules\Api\Models;

class BoardDeviceModel extends BaseModel
{
    protected $table = 'board_device';
    protected $returnType = 'App\Modules\Api\Entities\BoardDevice';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[board_device.id,id,{id}]',
		'name' => 'max_length[255]|required',
		// 'created_at' => 'valid_date|required',
		// 'updated_at' => 'valid_date|required',
		//  'created_by' => 'numeric|max_length[11]'
    ];   
}
