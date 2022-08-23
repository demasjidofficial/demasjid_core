<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class TimStaff
* @OA\Schema(
*     title="TimStaff",
*     description="TimStaff"
* )
*
* @OA\Tag(
*     name="TimStaff",
*     description="Everything about your TimStaff" 
* )
*/ 
class TimStaff extends BaseEntity
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
	 *     description="id_tim",
	 *     title="id_tim",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $id_tim;
	/**
	 * @OA\Property(		 		 		 
	 *     description="id_user",
	 *     title="id_user",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $id_user;
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
	/**
	 * @OA\Property(		 		 		 
	 *     description="updated_by",
	 *     title="updated_by",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $updated_by;
	/**
	 * @OA\Property(		 		 		 
	 *     description="tugas_tim",
	 *     title="tugas_tim",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $tugas_tim;
	/**
	 * @OA\Property(		 		 		 
	 *     description="target_nominal_tim",
	 *     title="target_nominal_tim",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $target_nominal_tim; 
}
/**
 *
 * @OA\RequestBody(
 *     request="TimStaff",
 *     description="TimStaff object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/TimStaff"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/TimStaff")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/TimStaff")
 *     )
 * )
 */