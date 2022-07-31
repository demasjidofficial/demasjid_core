<?php namespace App\Modules\Api\Models;

class PaymentMethodTransferModel extends BaseModel
{
    protected $table = 'payment_method';
    protected $returnType = 'App\Modules\Api\Entities\PaymentMethod';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'master_payment_id',
		'rek_no',
		'rek_name',
		'payment_category_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[payment_method.id,id,{id}]',
		'master_payment_id' => 'numeric|max_length[11]|required',
		'rek_no' => 'numeric|max_length[20]',
		'rek_name' => 'max_length[50]',
		'payment_category_id' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'master_bank.name as master_bank_name', 'master_bank.path_logo as master_bank_path_logo'];        
        $this->join('master_bank', 'master_bank.id = '.$this->table.'.master_payment_id');
        $this->where('payment_category_id', 1);
		return parent::findAll($limit, $offset);
    }

}
