<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class CommentRoomModel extends BaseModel
{
    protected $table = 'comment_room';
    protected $returnType = 'App\Modules\Api\Entities\CommentRoom';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'room_id',
		'kritik',
		'saran',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[comment_room.id,id,{id}]',
		'room_id' => 'numeric|max_length[11]',
		'kritik' => 'max_length[50]|required',
		'saran' => 'max_length[50]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]'
    ];   
}
