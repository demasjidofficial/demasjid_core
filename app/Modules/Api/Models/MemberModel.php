<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class MemberModel extends BaseModel
{
    protected $table         = 'member';
    protected $returnType    = 'App\Modules\Api\Entities\Member';
    protected $primaryKey    = 'id';
    protected $useTimestamps = true;
    public static $state = ['Draft', 'Submit', 'Approve', 'Reject', 'Void'];
    public static $defaultState = 'Submit';
    public static $finalState = 'Approve';
    protected $allowedFields = [
        'name',
        'wilayah_id',
        'code',
        'address',
        'email',
        'domain',
        'telephone',
        'path_logo',
        'path_image',
        'state',
        'created_at',
        'updated_at',
    ];
    protected $validationRules = [
        'id'         => 'numeric|required|is_unique[member.id,id,{id}]',
        'name'       => 'max_length[255]|required',
        'wilayah_id' => 'max_length[15]|required',
        // 'code'       => 'max_length[18]|required|is_unique[member.code,code,{id}]',
        'address'    => 'max_length[255]|required',
        'email'    => 'max_length[50]|required',
        'telephone'    => 'max_length[15]|required',
        'path_logo'  => 'max_length[255]|required',
        'path_image' => 'max_length[255]|required',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
    ];

    public function getCodeUnique($wilayahId)
    {
        $lastSequence = 0;
        $lastMember = $this->where('wilayah_id', $wilayahId)->orderBy('id', 'desc')->first();
        if($lastMember) {
            $lastSequence = intval(substr($lastMember->code, -2));
        }
        $lastSequence++;
        return str_replace('.', '', $wilayahId).str_pad($lastSequence, 2, '0', STR_PAD_LEFT);
    }
}
