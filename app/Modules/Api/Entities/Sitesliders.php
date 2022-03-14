<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Sitesliders
* @OA\Schema(
*     title="Sitesliders",
*     description="Sitesliders"
* )
*
* @OA\Tag(
*     name="Sitesliders",
*     description="Everything about your Sitesliders" 
* )
*/ 
class Sitesliders extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="id",
	 *     title="id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="name",
	 *     title="name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="path_image",
	 *     title="path_image",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $path_image;
	/**
	 * @OA\Property(		 		 		 
	 *     description="content",
	 *     title="content",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $content;
	/**
	 * @OA\Property(		 		 		 
	 *     description="sequence",
	 *     title="sequence",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $sequence;
	/**
	 * @OA\Property(		 		 		 
	 *     description="sitepage_id",
	 *     title="sitepage_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $sitepage_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="language_id",
	 *     title="language_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $language_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="state",
	 *     title="state",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $state;
	/**
	 * @OA\Property(		 		 		 
	 *     description="created_at",
	 *     title="created_at",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $created_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="updated_at",
	 *     title="updated_at",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $updated_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="created_by",
	 *     title="created_by",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $created_by; 

	protected $datamap = [
        'created_name' => 'full_name',
    ];

	public function getFullName(){

        return $this->first_name.' '.$this->last_name;
	}
}
/**
 *
 * @OA\RequestBody(
 *     request="Sitesliders",
 *     description="Sitesliders object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Sitesliders"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Sitesliders")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Sitesliders")
 *     )
 * )
 */