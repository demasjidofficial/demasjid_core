<?php

namespace App\Modules\Api\Models;

class BmdonationcampaigncategoryModel extends BaseModel
{
    protected $table = 'bmdonationcampaigncategory';
    protected $returnType = 'App\Modules\Api\Entities\Bmdonationcampaigncategory';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'name',
        'label',
        'description',
        'created_at',
        'updated_at',
        'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[bmdonationcampaigncategory.id,id,{id}]',
        'name' => 'max_length[128]|required',
        'label' => 'max_length[255]|required',
        'description' => 'required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        //  'created_by' => 'numeric|max_length[11]'
    ];
}
