<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Sitesections
* @OA\Schema(
*     title="Sitesections",
*     description="Sitesections"
* )
*
* @OA\Tag(
*     name="Sitesections",
*     description="Everything about your Sitesections" 
* )
*/ 
class Sitesections extends BaseEntity
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
	 *     description="title",
	 *     title="title",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $title;
	/**
	 * @OA\Property(		 		 		 
	 *     description="subtitle",
	 *     title="subtitle",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $subtitle;
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
 *     request="Sitesections",
 *     description="Sitesections object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Sitesections"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Sitesections")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Sitesections")
 *     )
 * )
 */