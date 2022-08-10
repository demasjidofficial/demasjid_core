<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class TargetFundraising
* @OA\Schema(
*     title="TargetFundraising",
*     description="TargetFundraising"
* )
*
* @OA\Tag(
*     name="TargetFundraising",
*     description="Everything about your TargetFundraising" 
* )
*/ 
class TargetFundraising extends BaseEntity
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
	 *     description="campaign",
	 *     title="campaign",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $campaign;
	/**
	 * @OA\Property(		 		 		 
	 *     description="donatur",
	 *     title="donatur",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $donatur;
	/**
	 * @OA\Property(		 		 		 
	 *     description="target_nominal",
	 *     title="target_nominal",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $target_nominal;
	/**
	 * @OA\Property(		 		 		 
	 *     description="tipe_donasi",
	 *     title="tipe_donasi",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=128,
	 * )
	 *		 
	 */
	private $tipe_donasi;
	/**
	 * @OA\Property(		 		 		 
	 *     description="jadwal_mulai",
	 *     title="jadwal_mulai",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=true,
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
	 * 	   nullable=true,
	 * )
	 *		 
	 */
	private $jadwal_akhir;
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
 *     request="TargetFundraising",
 *     description="TargetFundraising object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/TargetFundraising"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/TargetFundraising")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/TargetFundraising")
 *     )
 * )
 */