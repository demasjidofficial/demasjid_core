<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TimFundraisingModel extends BaseModel
{
    protected $table = 'tim_fundraising';
    protected $returnType = 'App\Modules\Api\Entities\TimFundraising';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'id_target',
		'id_jadwal',
		'supervisior',
		'staff',
		'created_at',
		'updated_at'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[tim_fundraising.id,id,{id}]',
		'id_target' => 'numeric|max_length[11]|required',
		'id_jadwal' => 'numeric|max_length[11]|required',
		'supervisior' => 'max_length[248]|required',
		'staff' => 'max_length[248]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required'
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
}
