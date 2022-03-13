<?php namespace App\Modules\Api\Models;

class BalanceModel extends BaseModel
{
    protected $table = 'balance';
    protected $returnType = 'App\Modules\Api\Entities\Balance';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'account_balance_id',
		'name',
		'description',
		'debit',
		'credit',
		'amount',
		'transaction_date',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[balance.id,id,{id}]',
		'account_balance_id' => 'numeric|required',
		'name' => 'max_length[50]|required',
		'description' => 'max_length[200]|required',
		'debit' => 'numeric|required',
		'credit' => 'numeric|required',
		'amount' => 'numeric|required',
		'transaction_date' => 'valid_date|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric'
    ];   

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name'];
        $this->join('users', 'users.id = '.$this->table.'.created_by');

        return parent::findAll($limit, $offset);
    }
}
