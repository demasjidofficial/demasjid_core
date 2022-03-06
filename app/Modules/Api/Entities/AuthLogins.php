<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class AuthLogins
* @OA\Schema(
*     title="AuthLogins",
*     description="AuthLogins"
* )
*
* @OA\Tag(
*     name="AuthLogins",
*     description="Everything about your AuthLogins" 
* )
*/ 
class AuthLogins extends BaseEntity
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
	 *     description="ip_address",
	 *     title="ip_address",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $ip_address;
	/**
	 * @OA\Property(		 		 		 
	 *     description="user_agent",
	 *     title="user_agent",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $user_agent;
	/**
	 * @OA\Property(		 		 		 
	 *     description="email",
	 *     title="email",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $email;
	/**
	 * @OA\Property(		 		 		 
	 *     description="user_id",
	 *     title="user_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $user_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="date",
	 *     title="date",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $date;
	/**
	 * @OA\Property(		 		 		 
	 *     description="success",
	 *     title="success",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=1,
	 * )
	 *		 
	 */
	private $success; 
}
/**
 *
 * @OA\RequestBody(
 *     request="AuthLogins",
 *     description="AuthLogins object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/AuthLogins"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/AuthLogins")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/AuthLogins")
 *     )
 * )
 */