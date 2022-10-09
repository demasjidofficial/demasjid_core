<?php

namespace App\Modules\Api\Models;

class RoomModel extends BaseModel
{
	protected $table = 'room';
	protected $returnType = 'App\Modules\Api\Entities\Room';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $allowedFields = [
		'gambar',
		'nama',
		'keterangan',
		'created_at',
		'updated_at',
		'created_by'
	];
	protected $validationRules = [
		'id' => 'numeric|max_length[11]|required|is_unique[room.id,id,{id}]',
		'gambar' => 'max_length[255]|required',
		'nama' => 'max_length[255]|required',
		'keterangan' => 'max_length[255]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
	];
}
