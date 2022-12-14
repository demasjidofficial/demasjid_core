<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class DonaturFundraisingSpvModel extends BaseModel
{
    protected $table = 'donatur_fundraising';
	protected $returnType = 'App\Modules\Api\Entities\Donatur';
	protected $primaryKey = 'id';
	protected $useTimestamps = true;
	protected $allowedFields = [
		'tugas_id',
		'tanggal_transaksi',
		'nama',
		'email',
		'no_hp',
		'alamat',
		'nominal',
		'path_image',
		'path_signature',
		'created_at',
		'updated_at',
		'created_by'
	];
	protected $validationRules = [
		'id' => 'numeric|max_length[11]|required|is_unique[donatur.id,id,{id}]',
		'tugas_id' => 'numeric|max_length[11]',
		'tanggal_transaksi' => 'valid_date',
		'nama' => 'max_length[100]',
		'email' => 'max_length[100]',
		'no_hp' => 'max_length[100]',
		'alamat' => 'max_length[100]',
		'nominal' => 'decimal|max_length[15]',
		'path_image' => 'max_length[255]',
		'path_signature' => 'max_length[255]',
		'created_at' => 'valid_date',
		'updated_at' => 'valid_date'
	];

	public function findAll(int $limit = 0, int $offset = 0)
	{
		$this->selectColumn = [
			$this->table . '.*', 'tugas_tim.tugas as tugas', 'tugas_tim.nominal_target as nominal_target',
			'tim_fundraising.nama_tim as nama_tim', 'users.username','users.first_name as first_name','users.last_name as last_name','tugas_tim.tugas as tugas'
		];


		$this->join('tugas_tim', 'tugas_tim.id = ' . $this->table . '.tugas_id');
	
		
		$this->join('tim_fundraising', 'tim_fundraising.id = tugas_tim.tim_id');

        $this->join('users', 'users.id = tugas_tim.supervisor_id');
		$this->where('tugas_tim.supervisor_id', auth()->user()->id);
		return parent::findAll($limit, $offset);
	}

	public function findWidget(int $limit = 5, int $offset = 0)
	{

		$this->selectColumn = [
			$this->table . '.nama as nama', $this->table . '.tanggal_transaksi as tanggal_transaksi', $this->table . '.nominal as nominal', 'tugas_tim.tugas as tugas', 'tugas_tim.nominal_target as nominal_target',
			'tim_fundraising.nama_tim as nama_tim', 'users.username'
		];


		$this->join('tugas_tim', 'tugas_tim.id = ' . $this->table . '.tugas_id');
	
		
		$this->join('tim_fundraising', 'tim_fundraising.id = tugas_tim.tim_id');
        $this->join('users', 'users.id = tugas_tim.supervisor_id');
	
		$this->where('tugas_tim.supervisor_id', auth()->user()->id);
	
		return parent::findAll($limit, $offset);
	} 
}
