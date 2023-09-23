<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Pengurus
* @OA\Schema(
*     title="Pengurus",
*     description="Pengurus"
* )
*
* @OA\Tag(
*     name="Pengurus",
*     description="Everything about your Pengurus"
* )
*/
class Pengurus extends BaseEntity
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
     *     description="jabatan_id",
     *     title="jabatan_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $jabatan_id;
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
     *     description="telephone",
     *     title="telephone",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=15,
     * )
     *
     */
    private $telephone;
    /**
     * @OA\Property(
     *     description="email",
     *     title="email",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=35,
     * )
     *
     */
    private $email;
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
     *     description="entity_id",
     *     title="entity_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $entity_id;
}
/**
 *
 * @OA\RequestBody(
 *     request="Pengurus",
 *     description="Pengurus object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Pengurus"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Pengurus")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Pengurus")
 *     )
 * )
 */
