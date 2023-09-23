<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class TugasTimModel extends BaseModel
{
    public const BEGIN = 'belum_mulai';
    public const END = 'selesai';
    public const CANCEL = 'batal';
    public const PROGRESS = 'berlangsung';
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
        'updated_at'

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
        $this->join('tim_staff', 'tim_staff.id = '.$this->table.'.staff_id');
        $this->join('users', 'users.id = tim_staff.user_id');
        $this->join('tim_fundraising', 'tim_fundraising.id = tim_staff.tim_id');
        $this->where('tim_staff.user_id', auth()->user()->id);
        $this->orwhere('tim_fundraising.supervisor', auth()->user()->id);
        return parent::findAll($limit, $offset);
    }
    public function findTugasStaff(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','users.first_name as first_name', 'users.last_name as last_name','tim_fundraising.nama_tim as nama_tim'];
        $this->join('tim_staff', 'tim_staff.id = '.$this->table.'.staff_id');
        $this->join('users', 'users.id = tim_staff.user_id');
        $this->join('tim_fundraising', 'tim_fundraising.id = tim_staff.tim_id');
        $this->where('tim_staff.user_id', auth()->user()->id);

        return parent::findAll($limit, $offset);
    }
    public function findTugasSpv(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*','users.first_name as first_name', 'users.last_name as last_name','tim_fundraising.nama_tim as nama_tim'];
        $this->join('users', 'users.id = '.$this->table.'.supervisor_id');
        $this->join('tim_fundraising', 'tim_fundraising.id = '.$this->table.'.tim_id');
        $this->where($this->table.'.supervisor_id', auth()->user()->id);
        return parent::findAll($limit, $offset);
    }
    public function findWidget(int $limit = 5, int $offset = 0)
    {

        $this->selectColumn = [$this->table.'.img_serah_terima as img_serah_terima',
        $this->table.'.tugas as tugas', $this->table.'.tugas as tugas',$this->table.'.nominal_target as nominal_target',$this->table.'.progres as progres',
        $this->table.'.nominal as nominal','tim_fundraising.nama_tim as nama_tim','users.first_name as first_name',
        'users.last_name as last_name'];


        $this->join('tim_staff', 'tim_staff.id = '.$this->table.'.staff_id');
        $this->join('users', 'users.id = tim_staff.user_id');
        $this->join('tim_fundraising', 'tim_fundraising.id = tim_staff.tim_id');
        $this->where('tim_staff.user_id', auth()->user()->id);
        $this->orwhere('tim_fundraising.supervisor', auth()->user()->id);
        $this->limit(5);
        return parent::findAll($limit, $offset);
    }
    public static function listState()
    {

        return [
            self::BEGIN => lang('crud.belum_mulai'),
            self::PROGRESS => lang('crud.sedang_berlangsung'),
            self::END => lang('crud.selesai'),
            self::CANCEL => lang('crud.batal'),
        ];
    }
}
