<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class DonaturType
* @OA\Schema(
*     title="DonaturType",
*     description="DonaturType"
* )
*
* @OA\Tag(
*     name="DonaturType",
*     description="Everything about your DonaturType" 
* )
*/ 
class DonaturType extends BaseEntity
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
	 *     description="type",
	 *     title="type",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $type;
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
}
/**
 *
 * @OA\RequestBody(
 *     request="DonaturType",
 *     description="DonaturType object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/DonaturType"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/DonaturType")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/DonaturType")
 *     )
 * )
 */