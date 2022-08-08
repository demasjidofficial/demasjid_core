<?php namespace App\Modules\Api\Models;



class TargetFundraisingModel extends BaseModel
{
    protected $table = 'target_fundraising';
    protected $returnType = 'App\Modules\Api\Entities\TargetFundraising';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'campaign',
		'donatur',
		'target_nominal',
		'tipe_donasi',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[target_fundraising.id,id,{id}]',
		'campaign' => 'max_length[128]|required',
		'donatur' => 'max_length[128]|required',
		'target_nominal' => 'max_length[128]|required',
		'tipe_donasi' => 'max_length[128]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
		// 'created_by' => 'numeric|max_length[11]'
		// 'updated_by' => 'numeric|max_length[11]'
    ]; 
	
	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','bmdonationtype.id as tipe_donasi_id','donaturcategory.id as donatur_id', 'donaturcategory.name as donatur', 'bmdonationtype.name as donasi'];        
        $this->join('bmdonationtype', 'bmdonationtype.id = '.$this->table.'.tipe_donasi');
		$this->join('donaturcategory', 'donaturcategory.id = '.$this->table.'.donatur', 'left');
        return parent::findAll($limit, $offset);
    }
}
