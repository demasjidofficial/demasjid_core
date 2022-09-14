<?php

namespace App\Modules\Api\Models;

class RoomReservModel extends BaseModel
{
	const ACCEPT = 'terima';
	const REJECT = 'tolak';
	protected $table = 'room_reserv';
	protected $returnType = 'App\Modules\Api\Entities\RoomReserv';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $allowedFields = [
		'name',
		'namaruangan',
		'room_id',
		'no_tlp',
		'alamat',
		'start_date',
		'end_date',
		'agenda',
		'keterangan',
		'status',
		'created_at',
		'updated_at',
		'created_by'
	];
	protected $validationRules = [
		'id' => 'numeric|max_length[11]|required|is_unique[room_reserv.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'namaruangan' => 'max_length[255]|required',
		'room_id' => 'numeric|max_length[11]',
		'no_tlp' => 'max_length[25]|required',
		'alamat' => 'max_length[255]|required',
		'start_date' => 'valid_date|required',
		'end_date' => 'valid_date|required',
		'agenda' => 'max_length[50]|required',
		'keterangan' => 'max_length[50]|required',
		'status' => 'max_length[20]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
	];

	public static function listState()
	{

		return [
			self::ACCEPT => lang('crud.diterima'),
			self::REJECT => lang('crud.tolak'),
		];
	}
}
