<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Pelajaran
* @OA\Schema(
*     title="Pelajaran",
*     description="Pelajaran"
* )
*
* @OA\Tag(
*     name="Pelajaran",
*     description="Everything about your Pelajaran"
* )
*/
class Pelajaran extends BaseEntity
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
     *     description="kelas_id",
     *     title="kelas_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $kelas_id;
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
     *     description="category_id",
     *     title="category_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $category_id;
    /**
     * @OA\Property(
     *     description="duration",
     *     title="duration",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $duration;
    /**
     * @OA\Property(
     *     description="uom_id",
     *     title="uom_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $uom_id;
    /**
     * @OA\Property(
     *     description="sequence",
     *     title="sequence",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $sequence;
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
 *     request="Pelajaran",
 *     description="Pelajaran object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Pelajaran"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Pelajaran")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Pelajaran")
 *     )
 * )
 */
