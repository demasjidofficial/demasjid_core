<?php namespace App\Modules\Api\Models;


class UomModel extends BaseModel
{
    protected $table = 'uom';
    protected $returnType = 'App\Modules\Api\Entities\Uom';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
		protected $beforeInsert = ['createdBy'];
    protected $allowedFields = [
        'name',
		'code',
		'type',
		'ratio',
		'created_at',
		'updated_at',
		'created_by',
		'uomcategory_id'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[uom.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'code' => 'max_length[255]',
		'type' => 'max_length[255]',
		'ratio' => 'decimal',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]',
		'uomcategory_id' => 'numeric|max_length[11]'
    ];   
		public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name', 'uom_category.name as category'];
        $this->join('users', 'users.id = '.$this->table.'.created_by');
        $this->join('uom_category', 'uom_category.id = '.$this->table.'.uomcategory_id');
        return parent::findAll($limit, $offset);
    }	
}
