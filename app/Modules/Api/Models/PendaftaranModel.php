<?php

namespace App\Modules\Api\Models;

class PendaftaranModel extends BaseModel
{
	const MALE = 'L';
	const FEMALE = 'P';
	const REGISTER = 'mendaftar';
	const RECIEVED = 'diterima';
	const REJECTED = 'ditolak';
	protected $table = 'pendaftaran';
	protected $returnType = 'App\Modules\Api\Entities\Pendaftaran';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $allowedFields = [
		'kelas_id',
		'state',
		'name',
		'nis',
		'nick_name',
		'birth_date',
		'birth_place',
		'gender',
		'provinsi_id',
		'kota_id',
		'kecamatan_id',
		'desa_id',
		'address',
		'school_origin',
		'description',
		'father_name',
		'father_job',
		'father_tlpn',
		'father_email',
		'mother_name',
		'mother_job',
		'mother_tlpn',
		'mother_email',
		'path_image',
		'tahun_ajaran_id',
		'created_at',
		'updated_at',
		'created_by'
	];
	protected $validationRules = [
		// 'id' => 'numeric|max_length[11]|required|is_unique[pendaftaran.id,id,{id}]',
		'kelas_id' => 'numeric|max_length[11]|required',
		'state' => 'max_length[20]|required',
		'name' => 'max_length[60]|required',
		'nis' => 'max_length[10]|required',
		'nick_name' => 'max_length[60]|required',
		'birth_date' => 'valid_date|required',
		'birth_place' => 'max_length[15]',
		'gender' => 'max_length[1]|required',
		'provinsi_id' => 'max_length[15]',
		'kota_id' => 'max_length[15]',
		'kecamatan_id' => 'max_length[15]',
		'desa_id' => 'max_length[15]',
		'address' => 'max_length[100]',
		'school_origin' => 'max_length[100]',
		'description' => 'required',
		'father_name' => 'max_length[60]|required',
		'father_job' => 'max_length[60]|required',
		'father_tlpn' => 'max_length[15]',
		'father_email' => 'max_length[35]',
		'mother_name' => 'max_length[60]|required',
		'mother_job' => 'max_length[60]|required',
		'mother_tlpn' => 'max_length[15]',
		'mother_email' => 'max_length[35]',
		'path_image' => 'max_length[255]',
		'tahun_ajaran_id' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		//  'created_by' => 'numeric|max_length[11]'
	];

	public static function listState()
	{

		return [
			self::MALE => lang('crud.male'),
			self::FEMALE => lang('crud.female'),
		];
	}

	public static function listStateRegister()
	{

		return [
			self::REGISTER => lang('crud.register'),
			self::RECIEVED => lang('crud.recieved'),
			self::REJECTED => lang('crud.rejected'),
		];
	}

	public function findAll(int $limit = 0, int $offset = 0)
	{
		$this->selectColumn = [$this->table . '.*', 'kelas.name as kelas_name', 'tahun_ajaran.name as tahunAjaran_name'];
		$this->join('kelas', 'kelas.id = ' . $this->table . '.kelas_id');
		$this->join('tahun_ajaran', 'tahun_ajaran.id = ' . $this->table . '.tahun_ajaran_id');
		return parent::findAll($limit, $offset);
	}

}
