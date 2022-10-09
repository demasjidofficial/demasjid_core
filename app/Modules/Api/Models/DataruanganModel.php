<?php namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class DataruanganModel extends BaseModel
{
    protected $table = 'dataruangan';
    protected $returnType = 'App\Modules\Api\Entities\Dataruangan';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'nama',
		'ukuran',
		'fasilitas',
		'kondisi'
    ];
    protected $validationRules = [
        'id' => 'numeric|max_length[11]|required|is_unique[dataruangan.id,id,{id}]',
		'nama' => 'max_length[255]|required',
		'ukuran' => 'max_length[255]|required',
		'fasilitas' => 'max_length[255]|required',
		'kondisi' => 'max_length[255]|required'
    ];   
}
