<?php namespace App\Modules\Api\Models;

class PengurusModel extends BaseModel
{
    protected $table = 'pengurus';
    protected $returnType = 'App\Modules\Api\Entities\Pengurus';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'description',
		'jabatan_id',
		'address',
		'path_image',
		'telephone',
		'email',
		'created_at',
		'updated_at',
		'provinsi_id',
		'kota_id',
		'kecamatan_id',
		'desa_id',
		'entity_id'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[pengurus.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'description' => 'required',
		'jabatan_id' => 'numeric|required',
		'address' => 'max_length[100]',
		'path_image' => 'max_length[255]',
		'telephone' => 'max_length[15]',
		'email' => 'max_length[35]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'provinsi_id' => 'max_length[15]',
		'kota_id' => 'max_length[15]',
		'kecamatan_id' => 'max_length[15]',
		'desa_id' => 'max_length[15]',
		'entity_id' => 'numeric'
    ];

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'jabatan.name as jabatan_name'];
        $this->join('jabatan', 'jabatan.id = '.$this->table.'.jabatan_id');

        return parent::findAll($limit, $offset);
    }
}
