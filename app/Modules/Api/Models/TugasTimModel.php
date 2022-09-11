<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TugasTimModel extends BaseModel
{
    const BEGIN = 'belum_mulai';
    const END = 'selesai';
    const CANCEL = 'batal';
    const PROGRESS = 'berlangsung';
    protected $table = 'tugas_tim';
    protected $returnType = 'App\Modules\Api\Entities\TugasTim';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'staff_id',
		'tugas',
		'nominal',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by',
		'progres',
		'nominal_target'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[tugas_tim.id,id,{id}]',
		'staff_id' => 'numeric|max_length[11]|required',
		'tugas' => 'max_length[255]|required',
		'nominal' => 'numeric|max_length[11]|required',
		
		'progres' => 'max_length[100]',
		'nominal_target' => 'numeric|max_length[11]'
    ];   

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','users.first_name as first_name', 'users.last_name as last_name','tim_fundraising.nama_tim as nama_tim'];        
        $this->join('tim_staff', 'tim_staff.id = '.$this->table.'.staff_id');
        $this->join('users', 'users.id = tim_staff.user_id');
		$this->join('tim_fundraising', 'tim_fundraising.id = tim_staff.tim_id');
		
        return parent::findAll($limit, $offset);
    }

    public static function listState(){

        return [
			self::BEGIN => lang('crud.belum_mulai'),
			self::PROGRESS => lang('crud.sedang_berlangsung'),
			self::END => lang('crud.selesai'),
			self::CANCEL => lang('crud.batal'),
		];
	}
}
