<?php namespace App\Modules\Api\Models;

class PaymentMethodModel extends BaseModel
{
    protected $table = 'payment_method';
    protected $returnType = 'App\Modules\Api\Entities\PaymentMethod';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'id_bank',
		'no_rek',
		'nama_rek',
		'id_payment_category',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[payment_method.id,id,{id}]',
		'id_bank' => 'numeric|max_length[11]|required',
		'no_rek' => 'numeric|max_length[20]',
		'nama_rek' => 'max_length[50]',
		'id_payment_category' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
    ];   
}
