<?php namespace App\Modules\Api\Models;



class TimFundraisingModel extends BaseModel
{
    protected $table = 'tim_fundraising';
    protected $returnType = 'App\Modules\Api\Entities\TimFundraising';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  

    protected $allowedFields = [
        'target_id',

		'nama_tim',
		'kode_tim',
		'id_jadwal',

		'id_jadwal',
		'kode_tim',
		'nama_tim',

		'supervisior',
		'created_by',
		'updated_by',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[tim_fundraising.id,id,{id}]',

		'target_id' => 'numeric|max_length[11]|required',
		// 'id_jadwal' => 'numeric|max_length[11]|required',
		'supervisior' => 'max_length[248]|required',
		'kode_tim' => 'max_length[248]|required',
		'nama_tim' => 'max_length[248]|required',
		// 'staff' => 'max_length[248]|required'



		// 'created_at' => 'valid_date|required',
		// 'updated_at' => 'valid_date|required'
		
		// 'updated_by' => 'numeric|max_length[11]'
    ]; 
	

	public function findAll(int $limit = 0, int $offset = 0)
    {

        $this->selectColumn = [$this->table.'.*',$this->table.'.nama_tim as nama_tim',$this->table.'.id as id','target_fundraising.target_nominal as target_nominal','target_fundraising.campaign_name as campaign_name','target_fundraising.jadwal_mulai as jadwal_mulai','target_fundraising.jadwal_akhir as jadwal_akhir','users.username as supervisor','target_fundraising.id as target_fundraising_id','bmdonationcampaign.name as donasi','bmdonationcampaign.name as kampanye','bmdonationcampaign.campaignstart_date as campaignstart_date','bmdonationcampaign.campaignend_date as campaignend_date','bmdonationcampaign.campaign_tonase as campaign_tonase','bmdonationcampaign.id as donation_id','donaturcategory.id as donatur_id', 'donaturcategory.name as donatur', 'bmdonationtype.name as donasi','group_concat(u2.username) as staff'];        

		
		$this->join('target_fundraising', 'target_fundraising.id = '.$this->table.'.target_id');
		$this->join('bmdonationcampaign', 'bmdonationcampaign.id = target_fundraising.campaign');
		$this->join('donaturcategory', 'donaturcategory.id = target_fundraising.donatur', 'left');
		$this->join('bmdonationtype', 'bmdonationtype.id = bmdonationcampaign.donationtype_id','left');
        $this->join('users', 'users.id ='.$this->table.'.supervisior','left');
		$this->join('tim_staff', 'tim_staff.tim_id ='.$this->table.'.id','left');
		$this->join('users u2', 'u2.id =tim_staff.user_id','left');
		$this->where($this->table . '.supervisior',auth()->user()->id);
		$this->orwhere($this->table . '.created_by',auth()->user()->id);
		$this->groupBy('tim_staff.tim_id');

		return parent::findAll($limit, $offset);
    }
	
	public function findWidget(int $limit = 5, int $offset = 0)
    {

        $this->selectColumn = [$this->table.'.kode_tim as kode_tim',$this->table.'.nama_tim as nama_tim','target_fundraising.campaign_name as campaign_name','target_fundraising.jadwal_mulai as jadwal_mulai','target_fundraising.jadwal_akhir as jadwal_akhir'];        

		
		$this->join('target_fundraising', 'target_fundraising.id = '.$this->table.'.target_id');
		$this->join('bmdonationcampaign', 'bmdonationcampaign.id = target_fundraising.campaign');
		$this->join('donaturcategory', 'donaturcategory.id = target_fundraising.donatur', 'left');
		$this->join('bmdonationtype', 'bmdonationtype.id = bmdonationcampaign.donationtype_id','left');
        $this->join('users', 'users.id ='.$this->table.'.supervisior','left');
		$this->where($this->table . '.supervisior',auth()->user()->id);
		$this->orwhere($this->table . '.created_by',auth()->user()->id);
		return parent::findAll($limit, $offset);
    }   
    public function insert($data = null, bool $returnID = true)
    {   
		$this->db->transBegin();
        $timStaff = $data['tim_staff'];
    
        $newId = parent::insert($data, $returnID);
		$this->insertDetail($newId, $timStaff);

		if ($this->db->transStatus() === false) {
			$this->db->transRollback();

            return false;
		} else {
			$this->db->transCommit();

            return $newId;
		}
    }	

	public function update($id = null, $data = null): bool
    {   
		$this->db->transBegin();
        $timStaff = $data['tim_staff'];                
        $result = parent::update($id, $data);
        $this->insertDetail($id, $timStaff);
		if ($this->db->transStatus() === false) {
			$this->db->transRollback();

            return false;
		} else {
			$this->db->transCommit();

            return $result;
		}
    }

	private function insertDetail($id, $timStaff){
		if(!empty($timStaff)){

            (new TimStaffTugasModel())->where('tim_id', $id)->delete();
			foreach($timStaff['user_id'] as $key => $user ){
                $detail = [
					'tim_id' => $id,
					'user_id' => $user
					
				];
                
                (new TimStaffTugasModel())->insert($detail);				
			}
		}
	}
}
