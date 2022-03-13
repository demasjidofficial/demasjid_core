<?php namespace App\Modules\Api\Models;

use CodeIgniter\Database\BaseBuilder;

class BalanceModel extends BaseModel
{
    protected $table = 'balance';
    protected $returnType = 'App\Modules\Api\Entities\Balance';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'account_balance_id',		
		'description',
		'type',		
		'amount',
		'transaction_date',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[balance.id,id,{id}]',
		'account_balance_id' => 'numeric|required',		
		'description' => 'max_length[200]|required',
		'type' => 'string|required',		
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

	private function filterBalance(string $type){       
		$this->whereIn('account_balance_id', function(BaseBuilder $builder)  use ($type){
			return $builder->select('id')->from('account_balance')
				->whereIn('entity_id', function(BaseBuilder $builder) use ($type){
					return $builder->select('id')->from('entity')->where('type', $type);
				});
		}); 
        
        return $this;    
    }

	public function masjid(){

        return $this->filterBalance(EntityModel::MASJID);
    }

	public function pesantren(){

        return $this->filterBalance(EntityModel::PESANTREN);
    }

	public function tpq(){

        return $this->filterBalance(EntityModel::TPQ);
    }
}
