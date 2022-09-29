<?php namespace App\Modules\Api\Models;

use CodeIgniter\Database\BaseBuilder;
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

		
    ];   

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','users.first_name as first_name', 'users.last_name as last_name','tim_fundraising.nama_tim as nama_tim'];        
        $this->join('users', 'users.id = '.$this->table.'.user_id');
		$this->join('tim_fundraising', 'tim_fundraising.id = '.$this->table.'.tim_id');
		$this->where($this->table . '.user_id',auth()->user()->id);
        return parent::findAll($limit, $offset);
    }

   
    
	
}
