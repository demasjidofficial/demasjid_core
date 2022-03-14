<?php

namespace App\Modules\Api\Models;

class EntityModel extends BaseModel
{
    const TYPE = [
        'masjid' => 'Masjid',
        'pesantren' => 'Pesantren',
        'sekolah' => 'Sekolah',
        'tpq' => 'TPQ',
    ];
    const MASJID = 'masjid';
    const PESANTREN = 'pesantren';
    const SEKOLAH = 'sekolah';
    const TPQ = 'tpq';
    protected $table = 'entity';
    protected $returnType = 'App\Modules\Api\Entities\Entity';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;    

    protected $allowedFields = [
        'name',
        'type',
        'created_at',
        'updated_at',
        'created_by',
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[entity.id,id,{id}]',
        'name' => 'max_length[50]|required',
        'type' => 'max_length[20]|required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        // 'created_by' => 'numeric'
    ];

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name'];
        $this->join('users', 'users.id = '.$this->table.'.created_by');

        return parent::findAll($limit, $offset);
    }    

    public function masjid(){
        $this->where('type', self::MASJID);
        return $this;
    }

    public function pesantren(){
        $this->where('type', self::PESANTREN);
        return $this;
    }

    public function tpq(){
        $this->where('type', self::TPQ);
        return $this;
    }
}
