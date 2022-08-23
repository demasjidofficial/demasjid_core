<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

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
        // 'id' => 'numeric|max_length[11]|required|is_unique[tim_staff.id,id,{id}]',
		// 'id_tim' => 'numeric|max_length[11]|required',
		// 'id_user' => 'numeric|max_length[11]|required',
		// 'created_at' => 'valid_date|required',
		// 'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric|max_length[11]',
		// 'updated_by' => 'numeric|max_length[11]',
		// 'target_nominal_tim' => 'max_length[100]'
    ];   

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','users.first_name as first_name', 'users.last_name as last_name','target_fundraising.campaign_name as tim'];        
        $this->join('users', 'users.id = '.$this->table.'.user_id');
		$this->join('tim_fundraising', 'tim_fundraising.id = '.$this->table.'.tim_id');
		$this->join('target_fundraising', 'target_fundraising.id = tim_fundraising.target_id');

        return parent::findAll($limit, $offset);
    }
}
