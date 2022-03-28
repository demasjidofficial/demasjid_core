<?php namespace App\Modules\Api\Models;

class ChartOfAccountModel extends BaseModel
{
    const GROUP = [
        'penerimaan_operasional',
        'pengeluaran_operasional',
        'penerimaan_non_operasional',
        'pengeluaran_non_operasional',
    ];
	protected $table = 'chart_of_account';
    protected $returnType = 'App\Modules\Api\Entities\ChartOfAccount';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'code',
		'name',
		'group_account',
		'entity_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[chart_of_account.id,id,{id}]',
		'code' => 'max_length[10]',
		'name' => 'max_length[60]|required',
		'group_account' => 'max_length[60]|required',
		'entity_id' => 'numeric|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric'
    ];

	public static function groupAccountList(){

        return array_combine(self::GROUP, [lang('crud.penerimaan_operasional'),lang('crud.pengeluaran_operasional'),lang('crud.penerimaan_non_operasional'),lang('crud.pengeluaran_non_operasional') ]);
	}

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name', 'entity.name as entity_name'];
        $this->join('users', 'users.id = '.$this->table.'.created_by');
        $this->join('entity', 'entity.id = '.$this->table.'.entity_id');

        return parent::findAll($limit, $offset);
    }
}
