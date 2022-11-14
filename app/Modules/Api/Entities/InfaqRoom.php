<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class InfaqRoom
* @OA\Schema(
*     title="InfaqRoom",
*     description="InfaqRoom"
* )
*
* @OA\Tag(
*     name="InfaqRoom",
*     description="Everything about your InfaqRoom" 
* )
*/ 
class InfaqRoom extends BaseEntity
{
    	/**
	 * @OA\Property(		 		 		 
	 *     description="nama_pemesan",
	 *     title="nama_pemesan",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $nama_pemesan;
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
	 *     description="tanggal_infaq",
	 *     title="tanggal_infaq",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $tanggal_infaq;
	/**
	 * @OA\Property(		 		 		 
	 *     description="jumlah_infaq",
	 *     title="jumlah_infaq",
	 *     type="number",
	 * 	   format="float",	 
	 * 	   nullable=false,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $jumlah_infaq;
	/**
	 * @OA\Property(		 		 		 
	 *     description="status",
	 *     title="status",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $status;
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
 *     request="InfaqRoom",
 *     description="InfaqRoom object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/InfaqRoom"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/InfaqRoom")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/InfaqRoom")
 *     )
 * )
 */