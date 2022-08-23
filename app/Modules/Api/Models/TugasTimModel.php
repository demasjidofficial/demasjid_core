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
		'updated_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[tugas_tim.id,id,{id}]',
		'id_staff' => 'numeric|max_length[11]|required',
		'tugas' => 'max_length[255]|required',
		'nominal' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		//'created_by' => 'numeric|max_length[11]',
		'updated_by' => 'numeric|max_length[11]'
    ];   

	public static function listState(){

        return [
			self::BEGIN => lang('crud.belum_mulai'),
			self::PROGRESS => lang('crud.sedang_berlangsung'),
			self::END => lang('crud.selesai'),
			self::CANCEL => lang('crud.batal'),
		];
	}

	

	public function insert($data = null, bool $returnID = true)
    {   
		$this->db->transBegin();
        $tugasTim = $data['tugas'];
        $newId = parent::insert($data, $returnID);
		$this->insertDetail($newId, $tugasTim);

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
        $tugasTim = $data['tugas_tim'];                
        $result = parent::update($id, $data);
        $this->insertDetail($id, $tugasTim);
		if ($this->db->transStatus() === false) {
			$this->db->transRollback();

            return false;
		} else {
			$this->db->transCommit();

            return $result;
		}
    }

	private function insertDetail($id, $tugasTim){
		if(!empty($tugasTim)){
            (new TugasTimModel())->where('id_staff', $id)->delete();
			foreach($tugasTim['tugas'] as $key => $tugas){
                $detail = [
					'id' => $id,
					'tugas' => $tugas,					
					'nominal' => str_replace('.', '', $tugasTim['nominal'][$key]),
					'progres' =>  $tugasTim['progres'][$key]
				];
                
                (new TugasTimModel())->insert($detail);				
			}
		}
	}
}
