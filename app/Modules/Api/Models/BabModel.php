<?php

namespace App\Modules\Api\Models;

class BabModel extends BaseModel
{
  protected $table = 'bab';
  protected $returnType = 'App\Modules\Api\Entities\Bab';
  protected $primaryKey = 'id';
  protected $useTimestamps = true;
  protected $allowedFields = [
    'pelajaran_id',
    'name',
    'sequence',
    'created_at',
    'updated_at',
    'created_by'
  ];
  protected $validationRules = [
    'id' => 'numeric|max_length[11]|required|is_unique[bab.id,id,{id}]',
    'pelajaran_id' => 'numeric|max_length[11]|required',
    'name' => 'max_length[60]|required',
    'sequence' => 'numeric|max_length[11]',
    'created_at' => 'valid_date|required',
    'updated_at' => 'valid_date|required',
    // 'created_by' => 'numeric|max_length[11]'
  ];

  public function findAll(int $limit = 0, int $offset = 0)
  {
    $this->selectColumn = [$this->table . '.*', 'pelajaran.name as name_pelajaran'];
    $this->join('pelajaran', 'pelajaran.id = ' . $this->table . '.pelajaran_id');

    return parent::findAll($limit, $offset);
  }
}
