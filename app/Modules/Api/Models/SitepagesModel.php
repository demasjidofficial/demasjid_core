<?php namespace App\Modules\Api\Models;

class SitepagesModel extends BaseModel
{
    protected $table = 'sitepages';
    protected $returnType = 'App\Modules\Api\Entities\Sitepages';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;  
    protected $allowedFields = [
        'title',
		'subtitle',
		'path_image',
		'content',
		'permalink',
		'meta_title',
		'meta_desc',
		'sitemenu_id',
		'language_id',
		'state',
		'created_at',
		'updated_at',
		'created_by'
    ];
    protected $validationRules = [
        'id' => 'numeric|required|is_unique[sitepages.id,id,{id}]',
		'title' => 'max_length[255]|required',
		'subtitle' => 'max_length[255]|required',
		'path_image' => 'max_length[255]',
		'content' => 'required',
		'permalink' => 'max_length[255]|required',
		'meta_title' => 'max_length[255]|required',
		'meta_desc' => 'required',
		'sitemenu_id' => 'numeric',
		'language_id' => 'numeric',
		'state' => 'max_length[20]',
		'created_at' => 'valid_date|required',
		'updated_at' => 'valid_date|required',
		// 'created_by' => 'numeric'
    ];

	public function findAll(int $limit = 0, int $offset = 0)
    {
        $this->selectColumn = [$this->table.'.*', 'users.first_name', 'users.last_name', 'sitemenus.name as sitemenus_name', 'sitemenus.label as sitemenus_label', 'languages.name as  language_name'];
        $this->join('sitemenus', 'sitemenus.id = '.$this->table.'.sitemenu_id');
		$this->join('languages', 'languages.id = '.$this->table.'.language_id');
		$this->join('users', 'users.id = '.$this->table.'.created_by');

        return parent::findAll($limit, $offset);
    } 
	
	public function findByslug($permalink) {
		$this->selectColumn = [$this->table . '.*'];
		$this->where(array(
			'permalink' => $permalink,
			'state' => 'release'
		));

		return parent::find();
		// $query = $this->get();
		// return $query->getRowArray();
	}
}
