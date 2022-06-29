<?php namespace App\Modules\Api\Models;

class BmdonationcampaignModel extends BaseModel
{
    protected $table = 'bmdonationcampaign';
    protected $returnType = 'App\Modules\Api\Entities\Bmdonationcampaign';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'label',
		'path_image',
		'description',
		'campaignstart_date',
		'campaignend_date',
		'campaign_tonase',
		'campaigncategory_id',
		'donationtype_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[bmdonationcampaign.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'label' => 'max_length[255]',
		'path_image' => 'max_length[255]',
		'description' => 'max_length[255]',
		'campaignstart_date' => 'valid_date|required',
		'campaignend_date' => 'valid_date|required',
		'campaign_tonase' => 'decimal|max_length[10]',
		'campaigncategory_id' => 'numeric|max_length[11]',
		'donationtype_id' => 'numeric|max_length[11]',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
    ];   
}