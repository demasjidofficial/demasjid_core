<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class PaymentMethod
* @OA\Schema(
*     title="PaymentMethod",
*     description="PaymentMethod"
* )
*
* @OA\Tag(
*     name="PaymentMethod",
*     description="Everything about your PaymentMethod" 
* )
*/ 
class PaymentMethod extends BaseEntity
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
	 *     description="id_bank",
	 *     title="id_bank",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $id_bank;
	/**
	 * @OA\Property(		 		 		 
	 *     description="no_rek",
	 *     title="no_rek",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $no_rek;
	/**
	 * @OA\Property(		 		 		 
	 *     description="nama_rek",
	 *     title="nama_rek",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=50,
	 * )
	 *		 
	 */
	private $nama_rek;
	/**
	 * @OA\Property(		 		 		 
	 *     description="id_payment_category",
	 *     title="id_payment_category",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $id_payment_category;
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
 *     request="PaymentMethod",
 *     description="PaymentMethod object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/PaymentMethod"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/PaymentMethod")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/PaymentMethod")
 *     )
 * )
 */