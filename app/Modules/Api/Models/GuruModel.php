<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class GuruModel extends BaseModel
{
	const MALE = 'L';
	const FEMALE = 'P';
	protected $table = 'guru';
	protected $returnType = 'App\Modules\Api\Entities\Guru';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $allowedFields = [
		'path_image',
		'name',
		'nip',
		'jns_kelamin',
		'created_at',
		'updated_at',
		'created_by'
	];
	protected $validationRules = [
		'id' => 'numeric|max_length[11]|required|is_unique[guru.id,id,{id}]',
		'path_image' => 'max_length[255]',
		'name' => 'max_length[255]|required',
		'nip' => 'max_length[255]|required',
		'jns_kelamin' => 'max_length[1]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
	];

	public static function listState()
	{

		return [
			self::MALE => lang('crud.male'),
			self::FEMALE => lang('crud.female'),
		];
	}
}
