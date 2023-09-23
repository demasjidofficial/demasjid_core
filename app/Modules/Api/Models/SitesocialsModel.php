<?php

namespace App\Modules\Api\Models;

class SitesocialsModel extends BaseModel
{
    protected $table = 'sitesocials';
    protected $returnType = 'App\Modules\Api\Entities\Sitesocials';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'name',
        'link',
        'path_icon',
        'state',
        'created_at',
        'updated_at',
        'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[sitesocials.id,id,{id}]',
        'name' => 'max_length[255]|required',
        'link' => 'max_length[255]|required',
        // 'path_icon' => 'max_length[255]',
        'state' => 'max_length[20]',
        'created_at' => 'valid_date|required',
        'updated_at' => 'valid_date|required',
        //  'created_by' => 'numeric'
    ];

    public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name'];
        $this->join('users', 'users.id = '.$this->table.'.created_by');

        return parent::findAll($limit, $offset);
    }

    public function findAllRelease(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*'];
        $this->where($this->table.'.state', 'release');
        return parent::findAll($limit, $offset);
    }


    public static function listSocials()
    {
        return [
            'facebook' => 'facebook',
            'twitter' => 'twitter',
            'youtube' => 'youtube',
            'instagram' => 'instagram',
        ];
    }

    public static function getIconSosials($key)
    {
        $icons = [
            'facebook' => 'fab fa-facebook',
            'twitter' => 'fab fa-twitter',
            'youtube' => 'fab fa-youtube',
            'instagram' => 'fab fa-instagram',
        ];
        return $icons[$key];
    }
}
