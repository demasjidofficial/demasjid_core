<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Sitemenus
* @OA\Schema(
*     title="Sitemenus",
*     description="Sitemenus"
* )
*
* @OA\Tag(
*     name="Sitemenus",
*     description="Everything about your Sitemenus" 
* )
*/ 
class Sitemenus extends BaseEntity
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
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="label",
	 *     title="label",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $label;
	/**
	 * @OA\Property(		 		 		 
	 *     description="parent",
	 *     title="parent",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $parent;
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
}
/**
 *
 * @OA\RequestBody(
 *     request="Sitemenus",
 *     description="Sitemenus object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Sitemenus"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Sitemenus")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Sitemenus")
 *     )
 * )
 */