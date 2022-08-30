<?php namespace App\Modules\Api\Models;

class SitemenusModel extends BaseModel
{
    protected $table = 'sitemenus';
    protected $returnType = 'App\Modules\Api\Entities\Sitemenus';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'name',
		'label',
		'parent',
		'language_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[sitemenus.id,id,{id}]',
		'name' => 'max_length[128]|required',
		'label' => 'max_length[255]|required',
		// 'parent' => 'numeric',
		// 'language_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric'
    ];

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 't2.name as parent_name'];
        // $this->join('users', 'users.id = '.$this->table.'.created_by') 'users.first_name', 'users.last_name',;
		$this->join($this->table.' t2', 't2.id = '.$this->table.'.parent', 'left');

        return parent::findAll($limit, $offset);
    }

	public function findAllRelease(int $language_id = 1, int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 't2.name as parent_name', 'sitepages.permalink'];
        $this->where(array($this->table.'.state' => 'release', $this->table.'.language_id'=> $language_id));
		$this->orderBy('parent', 'ASC');
		$this->join($this->table.' t2', 't2.id = '.$this->table.'.parent', 'left');
		$this->join('sitepages', $this->table.'.id = sitepages.sitemenu_id AND  sitepages.state = "release"', 'left');
        $this->orderBy('created_at', 'ASC');
		return parent::findAll($limit, $offset);
    }
}
