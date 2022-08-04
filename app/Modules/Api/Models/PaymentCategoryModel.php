<?php namespace App\Modules\Api\Models;

class PaymentCategoryModel extends BaseModel
{
    protected $table = 'payment_category';
    protected $returnType = 'App\Modules\Api\Entities\PaymentCategory';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[payment_category.id,id,{id}]',
		'name' => 'max_length[50]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
    ];   
}
