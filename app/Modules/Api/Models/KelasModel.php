<?php namespace App\Modules\Api\Models;

class KelasModel extends BaseModel
{
    protected $table = 'kelas';
    protected $returnType = 'App\Modules\Api\Entities\Kelas';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'description',
		'level_id',
		'capacity',
		'duration',
		'uom_id',
		'entity_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[kelas.id,id,{id}]',
		'name' => 'max_length[60]|required',
		'description' => 'max_length[255]|required',
		'level_id' => 'numeric|max_length[11]|required',
		'capacity' => 'numeric|max_length[11]',
		'duration' => 'numeric|max_length[11]',
		'uom_id' => 'numeric|max_length[11]|required',
		'entity_id' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'tingkat_pendidikan.name as level_name'];        
        $this->join('tingkat_pendidikan', 'tingkat_pendidikan.id = '.$this->table.'.level_id');
        return parent::findAll($limit, $offset);
    }  
}
