<?php namespace App\Modules\Api\Models;

class BoardNewsRuntextModel extends BaseModel
{
    protected $table = 'board_news_runtext';
    protected $returnType = 'App\Modules\Api\Entities\BoardNewsRuntext';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'text',
		'duration',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[board_news_runtext.id,id,{id}]',
		'text' => 'max_length[255]',
		// 'duration' => 'max_length[255]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		//  'created_by' => 'numeric|max_length[11]'
    ];   
}
