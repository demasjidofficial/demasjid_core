<?php namespace App\Modules\Api\Entities;
use asligresik\easyapi\Entities\BaseEntity;
/**    
* Class Pendaftaran
* @OA\Schema(
*     title="Pendaftaran",
*     description="Pendaftaran"
* )
*
* @OA\Tag(
*     name="Pendaftaran",
*     description="Everything about your Pendaftaran" 
* )
*/ 
class Pendaftaran extends BaseEntity
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
	 *     description="class_id",
	 *     title="class_id",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $class_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="state",
	 *     title="state",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $state;
	/**
	 * @OA\Property(		 		 		 
	 *     description="name",
	 *     title="name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=60,
	 * )
	 *		 
	 */
	private $name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="nis",
	 *     title="nis",
	 *     type="integer",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=11,
	 * )
	 *		 
	 */
	private $nis;
	/**
	 * @OA\Property(		 		 		 
	 *     description="nick_name",
	 *     title="nick_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=60,
	 * )
	 *		 
	 */
	private $nick_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="birth_date",
	 *     title="birth_date",
	 *     type="string",
	 * 	   format="date",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $birth_date;
	/**
	 * @OA\Property(		 		 		 
	 *     description="birth_place",
	 *     title="birth_place",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $birth_place;
	/**
	 * @OA\Property(		 		 		 
	 *     description="gender",
	 *     title="gender",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=20,
	 * )
	 *		 
	 */
	private $gender;
	/**
	 * @OA\Property(		 		 		 
	 *     description="provinsi_id",
	 *     title="provinsi_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $provinsi_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="kota_id",
	 *     title="kota_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $kota_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="kecamatan_id",
	 *     title="kecamatan_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $kecamatan_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="desa_id",
	 *     title="desa_id",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $desa_id;
	/**
	 * @OA\Property(		 		 		 
	 *     description="address",
	 *     title="address",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $address;
	/**
	 * @OA\Property(		 		 		 
	 *     description="school_origin",
	 *     title="school_origin",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=100,
	 * )
	 *		 
	 */
	private $school_origin;
	/**
	 * @OA\Property(		 		 		 
	 *     description="description",
	 *     title="description",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * )
	 *		 
	 */
	private $description;
	/**
	 * @OA\Property(		 		 		 
	 *     description="father_name",
	 *     title="father_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=60,
	 * )
	 *		 
	 */
	private $father_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="father_job",
	 *     title="father_job",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=60,
	 * )
	 *		 
	 */
	private $father_job;
	/**
	 * @OA\Property(		 		 		 
	 *     description="father_tlpn",
	 *     title="father_tlpn",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $father_tlpn;
	/**
	 * @OA\Property(		 		 		 
	 *     description="father_email",
	 *     title="father_email",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=35,
	 * )
	 *		 
	 */
	private $father_email;
	/**
	 * @OA\Property(		 		 		 
	 *     description="mother_name",
	 *     title="mother_name",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=60,
	 * )
	 *		 
	 */
	private $mother_name;
	/**
	 * @OA\Property(		 		 		 
	 *     description="mother_job",
	 *     title="mother_job",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=false,
	 * 	   maxLength=60,
	 * )
	 *		 
	 */
	private $mother_job;
	/**
	 * @OA\Property(		 		 		 
	 *     description="mother_tlpn",
	 *     title="mother_tlpn",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=15,
	 * )
	 *		 
	 */
	private $mother_tlpn;
	/**
	 * @OA\Property(		 		 		 
	 *     description="mother_email",
	 *     title="mother_email",
	 *     type="string",
	 * 	   format="-",	 
	 * 	   nullable=true,
	 * 	   maxLength=35,
	 * )
	 *		 
	 */
	private $mother_email;
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
 *     request="Pendaftaran",
 *     description="Pendaftaran object that needs to be added", 
 *     @OA\JsonContent(ref="#/components/schemas/Pendaftaran"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Pendaftaran")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Pendaftaran")
 *     )
 * )
 */