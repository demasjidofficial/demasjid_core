<?php

namespace App\Modules\Api\Models;

class InfaqRoomModel extends BaseModel
{
	const CASH = 'cash';
	const DEBIT = 'debit';
	protected $table = 'infaq_room';
	protected $returnType = 'App\Modules\Api\Entities\InfaqRoom';
	protected $primaryKey = 'room_id';
	protected $useTimestamps = true;
	protected $allowedFields = [
		'nama_pemesan',
		'room_id',
		'tanggal_infaq',
		'jumlah_infaq',
		'status',
		'created_at',
		'updated_at',
		'created_by'
	];
	protected $validationRules = [
		'nama_pemesan' => 'max_length[255]|required',
		'room_id' => 'numeric|max_length[11]',
		'tanggal_infaq' => 'valid_date|required',
		'jumlah_infaq' => 'numeric|max_length[15]|required',
		'status' => 'max_length[20]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
	];

	public static function listState()
	{

		return [
			self::CASH => lang('crud.cash'),
			self::DEBIT => lang('crud.debit'),
		];
	}
}
