<?php namespace App\Modules\Api\Models;

class PaymentMethodModel extends BaseModel
{
    protected $table = 'payment_method';
    protected $returnType = 'App\Modules\Api\Entities\PaymentMethod';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'master_bank_id',
		'rek_no',
		'rek_name',
		'payment_category_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[payment_method.id,id,{id}]',
		'master_bank_id' => 'numeric|max_length[11]|required',
		'rek_no' => 'numeric|max_length[20]',
		'rek_name' => 'max_length[50]',
		'payment_category_id' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   
}
