<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TugasTimModelSpv extends BaseModel
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
        'progres',
		'nominal_target',
        'img_serah_terima',
        'kode_tugas',
        'img_ttd_serah_terima',
		'created_at',
		'updated_at',
        'id_supervisor',
        'id_tim'
	
    ];
    protected $validationRules = [
        // 'id' => 'numeric|max_length[11]|required|is_unique[tugas_tim.id,id,{id}]',
		// 'staff_id' => 'numeric|max_length[11]|required',
		// 'tugas' => 'max_length[255]|required',
		// 'nominal' => 'numeric|max_length[11]|required',
		
		// 'progres' => 'max_length[100]',
		// 'nominal_target' => 'numeric|max_length[11]'
    ];   

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','users.first_name as first_name', 'users.last_name as last_name','tim_fundraising.nama_tim as nama_tim'];        
        $this->join('users', 'users.id = '.$this->table.'.id_supervisor');
		$this->join('tim_fundraising', 'tim_fundraising.id = '.$this->table.'.id_tim');
		$this->where($this->table.'.id_supervisor',auth()->user()->id);
        return parent::findAll($limit, $offset);
    }
    public function findWidget(int $limit = 5, int $offset = 0)
    {

        $this->selectColumn = [$this->table.'.img_serah_terima as img_serah_terima',
        $this->table.'.tugas as tugas', $this->table.'.tugas as tugas',$this->table.'.nominal_target as nominal_target',$this->table.'.progres as progres',
        $this->table.'.nominal as nominal','tim_fundraising.nama_tim as nama_tim','users.first_name as first_name', 
        'users.last_name as last_name'];        
        $this->join('users', 'users.id = '.$this->table.'.id_supervisor');
		$this->join('tim_fundraising', 'tim_fundraising.id = '.$this->table.'.id_tim');
		$this->where($this->table.'.id_supervisor',auth()->user()->id);
        $this->limit(5);
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
