<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class NominalTarget
* @OA\Schema(
*     title="NominalTarget",
*     description="NominalTarget"
* )
*
* @OA\Tag(
*     name="NominalTarget",
*     description="Everything about your NominalTarget" 
* )
*/ 
class NominalTarget extends BaseEntity
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
	 *     description="staff_id",
	 *     title="staff_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $staff_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="terkumpul_nominal",
	 *     title="terkumpul_nominal",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $terkumpul_nominal;
	/**
	 * @OA\Property(		 		 		 
	 *     description="target_nominal",
	 *     title="target_nominal",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $target_nominal;
	/**
	 * @OA\Property(		 		 		 
	 *     description="created_at",
	 *     title="created_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $created_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="updated_at",
	 *     title="updated_at",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $updated_at;
	/**
	 * @OA\Property(		 		 		 
	 *     description="created_by",
	 *     title="created_by",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $created_by;
	/**
	 * @OA\Property(		 		 		 
	 *     description="updated_by",
	 *     title="updated_by",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $updated_by; 
}
/**
 *
 * @OA\RequestBody(
 *     request="NominalTarget",
 *     description="NominalTarget object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/NominalTarget"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/NominalTarget")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/NominalTarget")
 *     )
 * )
 */