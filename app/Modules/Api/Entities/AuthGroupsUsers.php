<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class AuthGroupsUsers
* @OA\Schema(
*     title="AuthGroupsUsers",
*     description="AuthGroupsUsers"
* )
*
* @OA\Tag(
*     name="AuthGroupsUsers",
*     description="Everything about your AuthGroupsUsers" 
* )
*/ 
class AuthGroupsUsers extends BaseEntity
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
	 *     description="user_id",
	 *     title="user_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $user_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="group",
	 *     title="group",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $group;
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
}
/**
 *
 * @OA\RequestBody(
 *     request="AuthGroupsUsers",
 *     description="AuthGroupsUsers object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/AuthGroupsUsers"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/AuthGroupsUsers")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/AuthGroupsUsers")
 *     )
 * )
 */