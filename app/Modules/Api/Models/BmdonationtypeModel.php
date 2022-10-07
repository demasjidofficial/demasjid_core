<?php namespace App\Modules\Api\Models;

class BmdonationtypeModel extends BaseModel
{
    const ACTIVE = 'active';
    const INACTIVE = 'inactive';
    protected $table = 'bmdonationtype';
    protected $returnType = 'App\Modules\Api\Entities\Bmdonationtype';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'description',
		'uom_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[bmdonationtype.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'description' => 'max_length[255]',
		'uom_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'uom.name as uom_name'];
        $this->join('uom', 'uom.id = '.$this->table.'.uom_id');

        return parent::findAll($limit, $offset);
    } 

    public static function listState(){

        return [
			self::ACTIVE => lang('app.active'),
			self::INACTIVE => lang('app.inactive'),
		];
	}
}
