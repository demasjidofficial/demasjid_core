<?php namespace App\Modules\Api\Models;

class SiswaModel extends BaseModel
{
	const MALE = 'L';
    const FEMALE = 'P';
    protected $table = 'siswa';
    protected $returnType = 'App\Modules\Api\Entities\Siswa';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'path_image',
		'name',
		'nick_name',
		'gender',
		'birth_place',
		'birth_date',
		'provinsi_id',
		'kota_id',
		'kecamatan_id',
		'desa_id',
		'address',
		'nis',
		'kelas_id',
		'school_origin',
		'father_name',
		'father_job',
		'father_tlpn',
		'father_email',
		'mother_name',
		'mother_job',
		'mother_tlpn',
		'mother_email',
		'tahun_ajaran_id',
		'description',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[siswa.id,id,{id}]',
		'path_image' => 'max_length[255]',
		'name' => 'max_length[60]|required',
		'nick_name' => 'max_length[60]|required',
		'gender' => 'max_length[1]|required',
		'birth_place' => 'max_length[50]',
		'birth_date' => 'valid_date|required',
		'provinsi_id' => 'max_length[15]',
		'kota_id' => 'max_length[15]',
		'kecamatan_id' => 'max_length[15]',
		'desa_id' => 'max_length[15]',
		'address' => 'max_length[100]',
		'nis' => 'max_length[10]|required',
		'kelas_id' => 'numeric|max_length[11]|required',
		'school_origin' => 'max_length[100]',
		'father_name' => 'max_length[60]|required',
		'father_job' => 'max_length[60]|required',
		'father_tlpn' => 'max_length[15]',
		'father_email' => 'max_length[35]',
		'mother_name' => 'max_length[60]|required',
		'mother_job' => 'max_length[60]|required',
		'mother_tlpn' => 'max_length[15]',
		'mother_email' => 'max_length[35]',
		'tahun_ajaran_id' => 'numeric|max_length[11]|required',
		'description' => 'required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   

	public static function listState(){

        return [
			self::MALE => lang('crud.male'),
			self::FEMALE => lang('crud.female'),
		];
	}

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'kelas.name as kelas_name', 'tahun_ajaran.name as tahunAjaran_name'];        
        $this->join('kelas', 'kelas.id = '.$this->table.'.kelas_id');
		$this->join('tahun_ajaran', 'tahun_ajaran.id = ' . $this->table . '.tahun_ajaran_id');
        return parent::findAll($limit, $offset);
    }
}
