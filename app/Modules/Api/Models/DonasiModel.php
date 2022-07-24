<?php namespace App\Modules\Api\Models;

use CodeIgniter\Database\BaseBuilder;

class DonasiModel extends BaseModel
{
    protected $table = 'donasi';
    protected $returnType = 'App\Modules\Api\Entities\Donasi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'donatur_id',
		'paymentmethod_id',
		'campaign_id',
		'dana_in',
		'date',
		'path_image',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donasi.id,id,{id}]',
		'donatur_id' => 'numeric|max_length[11]|required',
		'paymentmethod_id' => 'numeric|max_length[11]|required',
		'campaign_id' => 'numeric|max_length[11]|required',
		'dana_in' => 'numeric|max_length[13]|required',
		'date' => 'valid_date|required',
		'path_image' => 'max_length[50]|required',
		'name' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
    ];   
}
