<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TargetFundraisingModel extends BaseModel
{
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
        $this->selectColumn = [$this->table.'.*','target_fundraising.campaign_name as campaign_name','target_fundraising.id as target_fundraising_id','target_fundraising.campaign_name as nama_kampanye','bmdonationcampaign.name as donasi','bmdonationcampaign.name as kampanye','bmdonationcampaign.campaignstart_date as campaignstart_date','bmdonationcampaign.campaignend_date as campaignend_date','bmdonationcampaign.campaign_tonase as campaign_tonase','bmdonationcampaign.id as donation_id','donaturcategory.id as donatur_id', 'donaturcategory.name as donatur', 'bmdonationtype.name as donasi'];        
		
		$this->join('bmdonationcampaign', 'bmdonationcampaign.id = '.$this->table.'.campaign');
		$this->join('donaturcategory', 'donaturcategory.id = '.$this->table.'.donatur', 'left');
		$this->join('bmdonationtype', 'bmdonationtype.id = bmdonationcampaign.donationtype_id','left');
		
        return parent::findAll($limit, $offset);
    }   
}
