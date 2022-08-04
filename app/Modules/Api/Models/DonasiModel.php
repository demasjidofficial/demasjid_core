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
		'created_by',
		'name',
		'email',
		'no_hp',
		'pesan'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donasi.id,id,{id}]',
		'paymentmethod_id' => 'numeric|max_length[11]|required',
		'campaign_id' => 'numeric|max_length[11]|required',
		'dana_in' => 'numeric|max_length[13]|required',
		'date' => 'valid_date|required',
		'name' => 'max_length[255]',
		'email' => 'max_length[50]',
		'no_hp' => 'max_length[50]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
    ];
	
	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->join('bmdonationcampaign', 'bmdonationcampaign.id = '.$this->table.'.campaign_id');
		$this->join('payment_method', 'payment_method.id = '.$this->table.'.paymentmethod_id');
		$this->select(''.$this->table.'.id,'.$this->table.'.dana_in, '.$this->table.'.date, '.$this->table.'.campaign_id, '.$this->table.'.paymentmethod_id, '.$this->table.'.state, '.$this->table.'.name, '.$this->table.'.email, '.$this->table.'.no_hp, '.$this->table.'.paymentmethod_id, bmdonationcampaign.name as campaign_name, payment_method.payment_category_id as payment_category, payment_method.rek_name as payment_rek_name');
		return parent::findAll($limit, $offset);
    }
}
