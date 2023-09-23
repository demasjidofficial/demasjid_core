<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class NonRawatibScheduleClone
* @OA\Schema(
*     title="NonRawatibScheduleClone",
*     description="NonRawatibScheduleClone"
* )
*
* @OA\Tag(
*     name="NonRawatibScheduleClone",
*     description="Everything about your NonRawatibScheduleClone"
* )
*/
class NonRawatibScheduleClone extends BaseEntity
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
     *     description="type_sholat",
     *     title="type_sholat",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=15,
     * )
     *
     */
    private $type_sholat;
    /**
     * @OA\Property(
     *     description="name",
     *     title="name",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=50,
     * )
     *
     */
    private $name;
    /**
     * @OA\Property(
     *     description="pray_date",
     *     title="pray_date",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $pray_date;
    /**
     * @OA\Property(
     *     description="imam_id",
     *     title="imam_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * )
     *
     */
    private $imam_id;
    /**
     * @OA\Property(
     *     description="khotib_id",
     *     title="khotib_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * )
     *
     */
    private $khotib_id;
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
     * )
     *
     */
    private $created_by;
}
/**
 *
 * @OA\RequestBody(
 *     request="NonRawatibScheduleClone",
 *     description="NonRawatibScheduleClone object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/NonRawatibScheduleClone"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/NonRawatibScheduleClone")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/NonRawatibScheduleClone")
 *     )
 * )
 */
