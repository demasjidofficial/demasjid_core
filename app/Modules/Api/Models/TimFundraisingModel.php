<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;
use App\Modules\Api\Entities\TimStaff;

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
		'supervisior',
		'staff',
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
		// 'created_by' => 'numeric|max_length[11]',
		// 'updated_by' => 'numeric|max_length[11]'
    ]; 
	
	// public function findAll(int $limit = 0, int $offset = 0)
    // {
    //     $this->selectColumn = [$this->table.'.*','donaturcategory.name as donatur', 'bmdonationtype.name as donasi'];        
    //     $this->join('bmdonationtype', 'bmdonationtype.id = '.$this->table.'.tipe_donasi');
	// 	$this->join('donaturcategory', 'donaturcategory.id = '.$this->table.'.donatur', 'left');
    //     return parent::findAll($limit, $offset);
    // }

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','target_fundraising.campaign_name as campaign_name','target_fundraising.jadwal_mulai as jadwal_mulai','target_fundraising.jadwal_akhir as jadwal_akhir','users.username as supervisor','target_fundraising.id as target_fundraising_id','bmdonationcampaign.name as donasi','bmdonationcampaign.name as kampanye','bmdonationcampaign.campaignstart_date as campaignstart_date','bmdonationcampaign.campaignend_date as campaignend_date','bmdonationcampaign.campaign_tonase as campaign_tonase','bmdonationcampaign.id as donation_id','donaturcategory.id as donatur_id', 'donaturcategory.name as donatur', 'bmdonationtype.name as donasi'];        
		
		$this->join('target_fundraising', 'target_fundraising.id = '.$this->table.'.target_id');
		$this->join('bmdonationcampaign', 'bmdonationcampaign.id = target_fundraising.campaign');
		$this->join('donaturcategory', 'donaturcategory.id = target_fundraising.donatur', 'left');
		$this->join('bmdonationtype', 'bmdonationtype.id = bmdonationcampaign.donationtype_id','left');
        $this->join('users', 'users.id ='.$this->table.'.supervisior','left');
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
            (new TimStaffModel())->where('tim_id', $id)->delete();
			foreach($timStaff['id_user'] as $key => $user ){
                $detail = [
					'tim_id' => $id,
					'id_user' => $user
				];
                
                (new TimStaffModel())->insert($detail);				
			}
		}
	}
}
