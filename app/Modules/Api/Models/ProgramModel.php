<?php namespace App\Modules\Api\Models;

class ProgramModel extends BaseModel
{
    const BEGIN = 'belum_mulai';
    const END = 'selesai';
    const CANCEL = 'batal';
    const PROGRESS = 'berlangsung';	
	protected $table = 'program';
    protected $returnType = 'App\Modules\Api\Entities\Program';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
	protected $beforeInsert = ['createdBy', 'clearAmountFormat'];
	protected $beforeUpdate = ['clearAmountFormat'];
    protected $allowedFields = [
        'name',
		'description',
		'start_date',
		'end_date',
		'state',
		'cost_estimate',
		'cost_actual',
		'path_image',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[program.id,id,{id}]',
		'name' => 'max_length[50]|required',
		'description' => 'required',
		'start_date' => 'valid_date|required',		
		'cost_estimate' => 'required',
		'end_date' => 'valid_date|required',
		'state' => 'max_length[20]|required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric'
    ];

	public static function listState(){

        return [
			self::BEGIN => lang('crud.belum_mulai'),
			self::PROGRESS => lang('crud.sedang_berlangsung'),
			self::END => lang('crud.selesai'),
			self::CANCEL => lang('crud.batal'),
		];
	}

	protected function clearAmountFormat(array $data)
    {
        
        if (isset($data['data']['cost_estimate'])) {
            $data['data']['cost_estimate'] = str_replace('.', '', $data['data']['cost_estimate']);
        }        

        return $data;
    }
}
