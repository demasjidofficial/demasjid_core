<?php namespace App\Modules\Api\Models;

class MateriModel extends BaseModel
{
    protected $table = 'materi';
    protected $returnType = 'App\Modules\Api\Entities\Materi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'bab_id',
		'name',
		'duration',
		'uom_id',
		'sequence',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[materi.id,id,{id}]',
		'bab_id' => 'numeric|max_length[11]|required',
		'name' => 'max_length[60]|required',
		'duration' => 'numeric|max_length[11]',
		'uom_id' => 'numeric|max_length[11]|required',
		'sequence' => 'numeric|max_length[11]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'uom.name as name_uom', 'bab.name as name_bab'];
        $this->join('uom', 'uom.id = '.$this->table.'.uom_id');
        $this->join('bab', 'bab.id = '.$this->table.'.bab_id');

        return parent::findAll($limit, $offset);
    } 
}
