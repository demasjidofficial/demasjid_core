<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel as ModelsBaseModel;
use CodeIgniter\Database\BaseBuilder;

class BaseModel extends ModelsBaseModel
{
    protected $beforeInsert = ['createdBy'];

    protected function createdBy(array $data)
    {
        if (in_array('created_by', $this->allowedFields)) {
            if (!isset($data['data']['created_by'])) {
                $data['data']['created_by'] = auth()->user()->id;
            }

        }

        return $data;
    }

    public function findAllExcludeJoin(int $limit = 0, int $offset = 0){
        return parent::findAll($limit, $offset);
    }

    protected function filterEntity(string $type){    
        $this->whereIn('entity_id', function(BaseBuilder $builder) use ($type){

            return $builder->select('id')->from('entity')->where('type', $type);
        });
        return $this;    
    }



    public function masjid(){

        return $this->filterEntity(EntityModel::MASJID);
    }

    public function pesantren(){

        return $this->filterEntity(EntityModel::PESANTREN);
    }

    public function tpq(){

        return $this->filterEntity(EntityModel::TPQ);
    }
}
