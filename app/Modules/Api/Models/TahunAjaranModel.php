<?php namespace App\Modules\Api\Models;

class TahunAjaranModel extends BaseModel
{
    const AKTIF = '1';
	const NONAKTIF = '0';
    protected $table = 'tahun_ajaran';
    protected $returnType = 'App\Modules\Api\Entities\TahunAjaran';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'status',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|max_length[11]|required|is_unique[tahun_ajaran.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'status' => 'max_length[1]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		//  'created_by' => 'numeric|max_length[11]'
    ];   

    public static function listState()
	{
		return [
			self::AKTIF => lang('crud.active'),
			self::NONAKTIF => lang('crud.nonactive'),
		];
	}
}
