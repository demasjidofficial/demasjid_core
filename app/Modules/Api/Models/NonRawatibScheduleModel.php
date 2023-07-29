<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class NonRawatibScheduleModel extends BaseModel
{
    protected $table = 'non_rawatib_schedule';
    protected $returnType = 'App\Modules\Api\Entities\NonRawatibSchedule';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'type_sholat',
		'name',
		'pray_date',
		'imam_id',
		'khotib_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[non_rawatib_schedule.id,id,{id}]',
		'type_sholat' => 'max_length[15]|required',
		'name' => 'max_length[50]',
		'pray_date' => 'valid_date|required',
		'imam_id' => 'numeric|required',
		// 'khotib_id' => 'numeric',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		//  'created_by' => 'numeric'
    ];

	private $listSholat = [
		'jumat' => 'Jumat',
		'tarawih' => 'Trawaih',
		'ied' => 'Hari Raya',
		'gerhana' => 'Gerhana',		
	];

	/**
	 * Get the value of listSholat
	 */ 
	public function getListSholat()
	{
		return $this->listSholat;
	}

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'imam.name as imam_name', 'khotib.name as khotib_name'];        
        $this->join('imam', 'imam.id = '.$this->table.'.imam_id');
		$this->join('imam khotib', 'khotib.id = '.$this->table.'.khotib_id', 'left');
        return parent::findAll($limit, $offset);
    }
}
