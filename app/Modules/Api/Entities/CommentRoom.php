<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class CommentRoom
* @OA\Schema(
*     title="CommentRoom",
*     description="CommentRoom"
* )
*
* @OA\Tag(
*     name="CommentRoom",
*     description="Everything about your CommentRoom" 
* )
*/ 
class CommentRoom extends BaseEntity
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
	 *     description="room_id",
	 *     title="room_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $room_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="kritik",
	 *     title="kritik",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $kritik;
	/**
	 * @OA\Property(		 		 		 
	 *     description="saran",
	 *     title="saran",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $saran;
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
 *     request="CommentRoom",
 *     description="CommentRoom object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/CommentRoom"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/CommentRoom")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/CommentRoom")
 *     )
 * )
 */