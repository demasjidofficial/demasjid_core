<?php

namespace App\Modules\Api\Models;

class ReportMasjidBalanceSheetModel extends BaseModel
{
    const GROUP = [
        'kas',
        'bank'
    ];
    protected $table = 'account_balance';
    protected $returnType = 'App\Modules\Api\Entities\AccountBalance';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'name',
        'account',
        'entity_id',
        'created_at',
        'group_account',
        'updated_at',
        'created_by',
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[account_balance.id,id,{id}]',
        'name' => 'max_length[50]|required',
        'account' => 'max_length[50]|required',
        'entity_id' => 'numeric|required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        'group_account' => 'required',
        // 'created_by' => 'numeric'
    ];

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name', 'entity.name as entity_name'];
        $this->join('users', 'users.id = '.$this->table.'.created_by');
        $this->join('entity', 'entity.id = '.$this->table.'.entity_id');

        return parent::findAll($limit, $offset);
    }

    public static function groupAccountList(){

        return array_combine(self::GROUP, [lang('crud.kas'),lang('crud.bank') ]);
	}
}
