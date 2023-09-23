<?php

namespace App\Modules\Api\Models;

class AssetModel extends BaseModel
{
    protected $table = 'asset';
    protected $returnType = 'App\Modules\Api\Entities\Asset';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $beforeInsert = ['createdBy', 'clearAmountFormat'];
    protected $beforeUpdate = ['clearAmountFormat'];
    protected $numericField = ['purchased_price', 'estimated_price'];
    protected $allowedFields = [
        'name',
        'purchased_date',
        'purchased_price',
        'estimated_price',
        'entity_id',
        'description',
        'path_image',
        'created_at',
        'updated_at',
        'created_by'
    ];
    protected $validationRules = [
        //'id' => 'numeric|required|is_unique[asset.id,id,{id}]',
        'name' => 'max_length[80]|required',
        'purchased_date' => 'valid_date|required',
        'purchased_price' => 'alpha_numeric_punct|required',
        'estimated_price' => 'alpha_numeric_punct|required',
        'entity_id' => 'numeric|required',
        'description' => 'max_length[255]',
        'path_image' => 'max_length[255]',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        //  'created_by' => 'numeric
    ];

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name', 'entity.name as entity_name'];
        $this->join('users', 'users.id = '.$this->table.'.created_by', 'left');
        $this->join('entity', 'entity.id = '.$this->table.'.entity_id');

        return parent::findAll($limit, $offset);
    }
}
