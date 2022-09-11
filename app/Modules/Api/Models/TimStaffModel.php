<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;
use App\Modules\Api\Entities\TugasTim;
class TimStaffModel extends BaseModel
{
    protected $table = 'tim_staff';
    protected $returnType = 'App\Modules\Api\Entities\TimStaff';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'tim_id',
		'user_id',
		'created_at',
		'updated_at',
		'created_by',
		'updated_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[tim_staff.id,id,{id}]',
		'tim_id' => 'numeric|max_length[11]|required',
		'user_id' => 'numeric|max_length[11]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]',
		'updated_by' => 'numeric|max_length[11]'
    ];   

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','users.first_name as first_name', 'users.last_name as last_name','tim_fundraising.nama_tim as nama_tim'];        
        $this->join('users', 'users.id = '.$this->table.'.user_id');
		$this->join('tim_fundraising', 'tim_fundraising.id = '.$this->table.'.tim_id');
		
        return parent::findAll($limit, $offset);
    }
    public function insert($data = null, bool $returnID = true)
    {   
		$this->db->transBegin();
        $tugasTim = $data['tugas_tim'];
    
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

            (new TugasTimModel())->where('staff_id', $id)->delete();
			foreach($tugasTim['tugas'] as $key => $tugas ){
                $detail = [
					'staff_id' => $id,
					'tugas' => $tugas

				];
                
                (new TimStaffModel())->insert($detail);				
			}
		}
	}
}
