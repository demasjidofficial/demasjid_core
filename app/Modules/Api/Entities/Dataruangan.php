<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Dataruangan
* @OA\Schema(
*     title="Dataruangan",
*     description="Dataruangan"
* )
*
* @OA\Tag(
*     name="Dataruangan",
*     description="Everything about your Dataruangan" 
* )
*/ 
class Dataruangan extends BaseEntity
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
	 *     description="nama",
	 *     title="nama",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $nama;
	/**
	 * @OA\Property(		 		 		 
	 *     description="ukuran",
	 *     title="ukuran",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $ukuran;
	/**
	 * @OA\Property(		 		 		 
	 *     description="fasilitas",
	 *     title="fasilitas",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $fasilitas;
	/**
	 * @OA\Property(		 		 		 
	 *     description="kondisi",
	 *     title="kondisi",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=255,
	 * )
	 *		 
	 */
	private $kondisi; 
}
/**
 *
 * @OA\RequestBody(
 *     request="Dataruangan",
 *     description="Dataruangan object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Dataruangan"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Dataruangan")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Dataruangan")
 *     )
 * )
 */