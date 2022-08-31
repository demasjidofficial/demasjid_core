<?php namespace App\Modules\Api\Models;


use asligresik\easyapi\Models\BaseModel;

use CodeIgniter\Database\BaseBuilder;


class DonasiModel extends BaseModel
{
    protected $table = 'donasi';
    protected $returnType = 'App\Modules\Api\Entities\Donasi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [

        'id_donatur',
		'id_pembayaran',
		'id_program',
		'dana_in',
		'tgl_transaksi',
		'bukti_pembayaran',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donasi.id,id,{id}]',
		'id_donatur' => 'numeric|max_length[11]|required',
		'id_pembayaran' => 'numeric|max_length[11]|required',
		'id_program' => 'numeric|max_length[11]|required',
		'dana_in' => 'numeric|max_length[2]|required',
		'tgl_transaksi' => 'valid_date|required',
		'bukti_pembayaran' => 'required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]'
    ];   

        'donatur_id',
		'paymentmethod_id',
		'campaign_id',
		'dana_in',
		'date',
		'path_image',
		'state',
		'created_at',
		'updated_at',
		'name',
		'email',
		'no_hp',
		'pesan',
		'no_inv',
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
		$this->join('master_bank', 'payment_method.payment_category_id = 1 AND master_bank.id = payment_method.master_payment_id', 'left',FALSE);
		$this->join('master_paymentgateway', 'payment_method.payment_category_id = 2 AND master_paymentgateway.id = payment_method.master_payment_id', 'left',FALSE);
		$this->select(''.$this->table.'.id,'.$this->table.'.no_inv, '.$this->table.'.dana_in, '.$this->table.'.date, '.$this->table.'.campaign_id, '.$this->table.'.path_image, '.$this->table.'.paymentmethod_id, '.$this->table.'.state, '.$this->table.'.name, '.$this->table.'.email, '.$this->table.'.no_hp, '.$this->table.'.paymentmethod_id, bmdonationcampaign.name as campaign_name, payment_method.payment_category_id as payment_category, payment_method.rek_name as payment_rek_name, payment_method.rek_no as payment_rek_no, master_bank.path_logo as bank_path_logo, master_paymentgateway.path_logo as paymentgateway_path_logo');
		return parent::findAll($limit, $offset);
    }

}
