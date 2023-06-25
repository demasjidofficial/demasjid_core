<?php namespace App\Modules\Api\Models;


class PelajaranModel extends BaseModel
{
    protected $table = 'pelajaran';
    protected $returnType = 'App\Modules\Api\Entities\Pelajaran';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'kelas_id',
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
       // 'id' => 'numeric|max_length[11]|required|is_unique[pelajaran.id,id,{id}]',
		'kelas_id' => 'numeric|max_length[11]|required',
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
        $this->selectColumn = [$this->table.'.*', 'kelas.name as kelas_name', 'kategori_pelajaran.name as category_name', 'uom.name as uom_name'];        
        $this->join('kelas', 'kelas.id = '.$this->table.'.kelas_id');
        $this->join('kategori_pelajaran', 'kategori_pelajaran.id = '.$this->table.'.category_id');
        $this->join('uom', 'uom.id = '.$this->table.'.uom_id');
        return parent::findAll($limit, $offset);
    }
}
