<?php namespace App\Modules\Api\Models;

class SiteslidersModel extends BaseModel
{
    protected $table = 'sitesliders';
    protected $returnType = 'App\Modules\Api\Entities\Sitesliders';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'path_image',
		'content',
		'sequence',
		'sitepage_id',
		'language_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
       // 'id' => 'numeric|required|is_unique[sitesliders.id,id,{id}]',
		'name' => 'max_length[255]|required',
		'path_image' => 'max_length[255]',
		// 'content' => 'required',
		'sequence' => 'numeric',
		'sitepage_id' => 'numeric',
		// 'language_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		//  'created_by' => 'numeric'
    ];

	public function findAll(int $limit = 0, int $offset = 0)
    {
		$this->selectColumn = [$this->table.'.*', 'sitepages.title as sitepages_title'];
        $this->join('sitepages', 'sitepages.id = '.$this->table.'.sitepage_id');

        return parent::findAll($limit, $offset);
    }   

	public function findAllByPagerelease(int $page_id = 0, int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'sitepages.title as sitepages_title'];
		$this->where(array($this->table.'.state' => 'release', $this->table.'.sitepage_id' => $page_id));
		$this->join('sitepages', 'sitepages.id = '.$this->table.'.sitepage_id');
		$this->orderBy('sequence', 'asc');
		
        return parent::findAll($limit, $offset);
    }
}
