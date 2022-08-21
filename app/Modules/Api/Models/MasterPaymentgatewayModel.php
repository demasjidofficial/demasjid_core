<?php namespace App\Modules\Api\Models;

class MasterPaymentgatewayModel extends BaseModel
{
    protected $table = 'master_paymentgateway';
    protected $returnType = 'App\Modules\Api\Entities\MasterPaymentgateway';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [

        'logo',
		'nama_paymentgateway',

        'path_logo',
		'name',

		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[master_paymentgateway.id,id,{id}]',

		'logo' => 'max_length[255]',
		'nama_paymentgateway' => 'max_length[100]',

		'path_logo' => 'max_length[255]',
		'name' => 'max_length[100]',

		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]'
    ];   
}
