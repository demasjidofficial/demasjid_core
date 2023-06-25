<?php namespace App\Modules\Api\Models;

class BoardNewsModel extends BaseModel
{
    protected $table = 'board_news';
    protected $returnType = 'App\Modules\Api\Entities\BoardNews';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'board_newsbg_id',
		'board_newsruntext_id',
		'rawatib_schedule_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[board_news.id,id,{id}]',
		'board_newsbg_id' => 'numeric|max_length[11]',
		'board_newsruntext_id' => 'numeric|max_length[11]',
		'rawatib_schedule_id' => 'numeric|max_length[11]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
