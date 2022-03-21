<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Uom
* @OA\Schema(
*     title="Uom",
*     description="Uom"
* )
*
* @OA\Tag(
*     name="Uom",
*     description="Everything about your Uom" 
* )
*/ 
class Uom extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="id",
	 *     title="id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
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
	 *     description="code",
	 *     title="code",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $code;
	/**
	 * @OA\Property(		 		 		 
	 *     description="type",
	 *     title="type",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $type;
	/**
	 * @OA\Property(		 		 		 
	 *     description="ratio",
	 *     title="ratio",
	 *     type="number",
	 * 	   format="float",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $ratio;
	/**
	 * @OA\Property(		 		 		 
	 *     description="uomcategory_id",
	 *     title="uomcategory_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $uomcategory_id;
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
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $created_by; 
	protected $datamap = [
		'created_name' => 'full_name',
	];

	public function getFullName()
	{

		return $this->first_name . ' ' . $this->last_name;
	}
}
/**
 *
 * @OA\RequestBody(
 *     request="Uom",
 *     description="Uom object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Uom"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Uom")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Uom")
 *     )
 * )
 */