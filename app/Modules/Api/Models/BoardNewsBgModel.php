<?php namespace App\Modules\Api\Models;

class BoardNewsBgModel extends BaseModel
{
    protected $table = 'board_news_bg';
    protected $returnType = 'App\Modules\Api\Entities\BoardNewsBg';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'path_image',
		'duration',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[board_news_bg.id,id,{id}]',
		'path_image' => 'max_length[255]',
		// 'duration' => 'max_length[255]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
