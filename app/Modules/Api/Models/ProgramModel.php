<?php namespace App\Modules\Api\Models;

use App\Modules\Api\Entities\ProgramCost;

class ProgramModel extends BaseModel
{
    const BEGIN = 'belum_mulai';
    const END = 'selesai';
    const CANCEL = 'batal';
    const PROGRESS = 'berlangsung';	
	protected $table = 'program';
    protected $returnType = 'App\Modules\Api\Entities\Program';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
	protected $beforeInsert = ['createdBy', 'clearAmountFormat'];
	protected $beforeUpdate = ['clearAmountFormat'];
	protected $numericField = ['cost_estimate'];
    protected $allowedFields = [
        'name',
		'description',
		'start_date',
		'end_date',
		'state',
		'program_category_id',
		'cost_estimate',
		'cost_actual',
		'path_image',
		'created_at',
		'updated_at',
		'created_by'
    ];	

    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[program.id,id,{id}]',
		'name' => 'max_length[50]|required',
		'description' => 'required',
		'start_date' => 'valid_date|required',		
		'cost_estimate' => 'required',
		'end_date' => 'valid_date|required',
		'state' => 'max_length[20]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		//  'created_by' => 'numeric'
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
        $programCost = $data['program_cost'];
        $newId = parent::insert($data, $returnID);
		$this->insertDetail($newId, $programCost);

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
        $programCost = $data['program_cost'];                
        $result = parent::update($id, $data);
        $this->insertDetail($id, $programCost);
		if ($this->db->transStatus() === false) {
			$this->db->transRollback();

            return false;
		} else {
			$this->db->transCommit();

            return $result;
		}
    }

	private function insertDetail($id, $programCost){
		if(!empty($programCost)){
            (new ProgramCostModel())->where('program_id', $id)->delete();
			foreach($programCost['name'] as $key => $name){
                $detail = [
					'program_id' => $id,
					'name' => $name,					
					'cost_estimate' => str_replace('.', '', $programCost['cost_estimate'][$key])
				];
                
                (new ProgramCostModel())->insert($detail);				
			}
		}
	}
}
