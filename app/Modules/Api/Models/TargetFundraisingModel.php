<?php

namespace App\Modules\Api\Models;


use CodeIgniter\Database\BaseBuilder;

class TargetFundraisingModel extends BaseModel
{
	const TYPE = [
        'tunai' => 'Tunai',
        'transfer' => 'Transfer',
        'perseorangan' => 'Perseorangan',
        'lembaga' => 'Lembaga',
		'perusahaan' => 'Perusahaan',
        'ukm' => 'UKM',
    ];
    const TUNAI = '1';
    const TRANSFER = '2';
    const PERSEORANGAN = '1';
    const LEMBAGA = '2';
	const PERUSAHAAN = '3';
    const UKM = '4';
	protected $table = 'target_fundraising';
	protected $returnType = 'App\Modules\Api\Entities\TargetFundraising';
	protected $primaryKey = 'id';

	protected $useTimestamps = true;
	protected $allowedFields = [
		'campaign',
		'campaign_name',
		'donatur',
		'target_nominal',
		'tipe_donasi',
		'jadwal_mulai',
		'jadwal_akhir',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by'
	
	];
	protected $validationRules = [
		'id' => 'numeric|max_length[11]|required|is_unique[target_fundraising.id,id,{id}]',
		'campaign' => 'numeric|max_length[11]|required',
		'campaign_name' => 'max_length[128]|required',
		'donatur' => 'max_length[128]|required',



	];
	public function findAll(int $limit = 0, int $offset = 0)
	{

		$this->selectColumn = [$this->table . '.*', 'target_fundraising.id as target_fundraising_id',
		 'target_fundraising.campaign_name as nama_kampanye', 'bmdonationcampaign.name as donasi', 
		 'bmdonationcampaign.name as kampanye', 'bmdonationcampaign.campaignstart_date as campaignstart_date', 
		 'bmdonationcampaign.campaignend_date as campaignend_date', 
		 'bmdonationcampaign.campaign_tonase as campaign_tonase', 'bmdonationcampaign.id as donation_id',
		  'donaturcategory.id as donatur_id', 'donaturcategory.name as donatur', 'bmdonationtype.name as donasi'
		  ,'users.first_name','users.last_name'];

	

		$this->join('bmdonationcampaign', 'bmdonationcampaign.id = ' . $this->table . '.campaign');
		$this->join('donaturcategory', 'donaturcategory.id = ' . $this->table . '.donatur', 'left');
		$this->join('bmdonationtype', 'bmdonationtype.id = bmdonationcampaign.donationtype_id', 'left');
		$this->join('users', 'users.id = ' . $this->table . '.created_by');
		$this->where($this->table . '.created_by',auth()->user()->id);
		return parent::findAll($limit, $offset);
	}
	private function filterDonasi(string $type)
	{
		$this->whereIn('tipe_donasi', function (BaseBuilder $builder) use ($type) {
			return $builder->select('id')->from('bmdonationtype')->where('id', $type);
		});


		return $this;
	}

	private function filterDonaturKat(string $type)
	{
		$this->whereIn('donatur', function (BaseBuilder $builder) use ($type) {
			return $builder->select('id')->from('donaturcategory')->where('id', $type);
		});


		return $this;
	}

	public function tunai()
	{

		return $this->filterDonasi(self::TUNAI);
	}
	public function transfer()
	{

		return $this->filterDonasi(self::TRANSFER);
	}


	public function perseorangan()
	{

		return $this->filterDonaturKat(self::PERSEORANGAN);
	}
	public function lembaga()
	{

		return $this->filterDonaturKat(self::LEMBAGA);
	}

	public function perusahaan()
	{

		return $this->filterDonaturKat(self::PERUSAHAAN);
	}
	public function ukm()
	{

		return $this->filterDonaturKat(self::UKM);
	}


}
