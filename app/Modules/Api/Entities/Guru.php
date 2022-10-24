<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Guru
* @OA\Schema(
*     title="Guru",
*     description="Guru"
* )
*
* @OA\Tag(
*     name="Guru",
*     description="Everything about your Guru" 
* )
*/ 
class Guru extends BaseEntity
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
	 *     description="nip",
	 *     title="nip",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $nip;
	/**
	 * @OA\Property(		 		 		 
	 *     description="jns_kelamin",
	 *     title="jns_kelamin",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=1,
	 * )
	 *		 
	 */
	private $jns_kelamin;
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
 *     request="Guru",
 *     description="Guru object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Guru"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Guru")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Guru")
 *     )
 * )
 */