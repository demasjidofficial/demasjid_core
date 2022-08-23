<?php

namespace App\Modules\Masjid\Models;

use App\Modules\Api\Models\WilayahModel;
use Bonfire\Traits\Filterable;

class WilayahFilter extends WilayahModel
{
    use Filterable;

    /**
     * The filters that can be applied to
     * lists of Users.
     *
     * @var array
     */
    protected $filters = [
        'level' => [
            'title'   => 'Level',
            'options' => ['Provinsi' => 'Provinsi', 'Kota/Kabupaten' => 'Kota/Kabupaten', 'Kecamatan' => 'Kecamatan', 'Desa' => 'Desa']
        ],
        'nama' => [
            'title'   => 'Nama'            
        ],
        'kode' => [
            'title'   => 'Kode'            
        ],
    ];

    /**
     * Provides filtering functionality.
     *
     * @param array $params
     *
     * @return UserFilter
     */
    public function filter(?array $params = null)
    {
        $this->select('wilayah.*');

        if (isset($params['level']) && count($params['level'])) {
            $this->whereIn('wilayah.level', $params['level']);
        }

        if (isset($params['nama']) && !empty($params['nama'])) {
            $this->like('wilayah.nama',$params['nama'] ,'both');
        }

        if (isset($params['kode']) && !empty($params['kode'])) {
            $this->like('wilayah.kode',$params['kode'] ,'after');
        }
        
        return $this;
    }
}
