<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class DonasiModel extends BaseModel
{
    protected $table = 'donasi';
    protected $returnType = 'App\Modules\Api\Entities\Donasi';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'id_donatur',
		'id_pembayaran',
		'id_program',
		'dana_in',
		'tgl_transaksi',
		'bukti_pembayaran',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[donasi.id,id,{id}]',
		'id_donatur' => 'numeric|max_length[11]|required',
		'id_pembayaran' => 'numeric|max_length[11]|required',
		'id_program' => 'numeric|max_length[11]|required',
		'dana_in' => 'numeric|max_length[2]|required',
		'tgl_transaksi' => 'valid_date|required',
		'bukti_pembayaran' => 'required',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		'created_by' => 'numeric|max_length[11]'
    ];   
}
