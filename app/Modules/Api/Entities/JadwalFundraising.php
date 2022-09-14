<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class JadwalFundraising
* @OA\Schema(
*     title="JadwalFundraising",
*     description="JadwalFundraising"
* )
*
* @OA\Tag(
*     name="JadwalFundraising",
*     description="Everything about your JadwalFundraising" 
* )
*/ 
class JadwalFundraising extends BaseEntity
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
	 *     description="jadwal_durasi",
	 *     title="jadwal_durasi",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $jadwal_durasi;
	/**
	 * @OA\Property(		 		 		 
	 *     description="jadwal_mulai",
	 *     title="jadwal_mulai",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $jadwal_mulai;
	/**
	 * @OA\Property(		 		 		 
	 *     description="jadwal_akhir",
	 *     title="jadwal_akhir",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $jadwal_akhir;
	/**
	 * @OA\Property(		 		 		 
	 *     description="target_dana",
	 *     title="target_dana",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $target_dana;
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
}
/**
 *
 * @OA\RequestBody(
 *     request="JadwalFundraising",
 *     description="JadwalFundraising object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/JadwalFundraising"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/JadwalFundraising")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/JadwalFundraising")
 *     )
 * )
 */