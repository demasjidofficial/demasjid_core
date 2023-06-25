<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class RawatibScheduleModel extends BaseModel
{
    protected $table = 'rawatib_schedule';
    protected $returnType = 'App\Modules\Api\Entities\RawatibSchedule';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'pray_time',
		'is_automatic',
		'imam_id',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[rawatib_schedule.id,id,{id}]',
		'name' => 'max_length[15]|required',
		'pray_time' => 'required',
		'is_automatic' => 'numeric|max_length[1]|required',
		'imam_id' => 'numeric|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric'
    ];   

	private $listSholat = [
		'subuh' => 'Subuh',
		'dhuhur' => 'Dhuhur',
		'ashar' => 'Ashar',
		'maghrib' => 'Maghrib',
		'isya' => 'Isya',
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
        $this->selectColumn = [$this->table.'.*', 'imam.name as imam_name'];        
        $this->join('imam', 'imam.id = '.$this->table.'.imam_id');

        return parent::findAll($limit, $offset);
    }
}
