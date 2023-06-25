<?php namespace App\Modules\Api\Models;

class PaymentMethodPaygatModel extends BaseModel
{
    const PAYMENTGATEWAY = 2;
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
		'created_by',
		'isActived',
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[payment_method.id,id,{id}]',
		'master_payment_id' => 'numeric|max_length[11]|required',
		'rek_no' => 'max_length[30]',
		'rek_name' => 'max_length[50]',
		'payment_category_id' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
    ];  
	
	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'master_paymentgateway.name as master_paymentgateway_name', 'master_paymentgateway.path_logo as master_paymentgateway_path_logo'];        
        $this->join('master_paymentgateway', 'master_paymentgateway.id = '.$this->table.'.master_payment_id');
        $this->where('payment_category_id', self::PAYMENTGATEWAY);
		return parent::findAll($limit, $offset);
    }

    public function paymentGateway(){
        return self::PAYMENTGATEWAY;
    }
}
