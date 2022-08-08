<?php namespace App\Modules\Api\Models;


class PelajaranModel extends BaseModel
{
    protected $table = 'pelajaran';
    protected $returnType = 'App\Modules\Api\Entities\Pelajaran';
    protected $primaryKey = 'id';
    protected $beforeInsert = ['createdBy'];
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'class_id',
		'name',
		'category_id',
		'duration',
		'uom_id',
		'sequence',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[pelajaran.id,id,{id}]',
		'class_id' => 'numeric|max_length[11]|required',
		'name' => 'max_length[60]|required',
		'category_id' => 'numeric|max_length[11]|required',
		'duration' => 'numeric|max_length[11]',
		'uom_id' => 'numeric|max_length[11]|required',
		'sequence' => 'numeric|max_length[11]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
		public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name', 'uom.name as name_uom', 'kelas.name as name_kelas', 'kategori_pelajaran.name as name_kategori_pelajaran'];
        $this->join('users', 'users.id = '.$this->table.'.created_by');
        $this->join('uom', 'uom.id = '.$this->table.'.uom_id');
        $this->join('kelas', 'kelas.id = '.$this->table.'.class_id');
        $this->join('kategori_pelajaran', 'kategori_pelajaran.id = '.$this->table.'.category_id');

        return parent::findAll($limit, $offset);
    }   
}
