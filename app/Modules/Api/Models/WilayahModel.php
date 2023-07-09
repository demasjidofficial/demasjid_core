<?php

namespace App\Modules\Api\Models;

use asligresik\easyapi\Models\BaseModel;

class WilayahModel extends BaseModel
{
    const PROVINSI = 'provinsi';
    const KOTA = 'kota/kabupaten';
    const KECAMATAN = 'kecamatan';
    const DESA = 'desa';
    protected $table         = 'wilayah';
    protected $returnType    = 'App\Modules\Api\Entities\Wilayah';
    protected $primaryKey    = 'kode';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'nama',
        'level',
    ];    
    protected $validationRules = [
        'kode'  => 'max_length[15]|required|is_unique[wilayah.kode,id,{id}]',
        'nama'  => 'max_length[70]|required',
        'level' => 'required',
    ];

    public function extractWilayah($kode){
        
        $this->whereIn('kode', extractWilayah($kode));

        return $this;
    }

    public function provinsi(){
        $this->where('level', self::PROVINSI);
        return $this;
    }

    public function kota(){
        $this->where('level', self::KOTA);
        return $this;
    }

    public function kecamatan(){
        $this->where('level', self::KECAMATAN);
        return $this;
    }

    public function desa(){
        $this->where('level', self::DESA);
        return $this;
    }
}
