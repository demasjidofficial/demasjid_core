<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel as ModelsBaseModel;

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
}
