<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class TimFundraising
* @OA\Schema(
*     title="TimFundraising",
*     description="TimFundraising"
* )
*
* @OA\Tag(
*     name="TimFundraising",
*     description="Everything about your TimFundraising"
* )
*/
class TimFundraising extends BaseEntity
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
     *     description="target_id",
     *     title="target_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $target_id;
    /**
     * @OA\Property(
     *     description="id_jadwal",
     *     title="id_jadwal",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $id_jadwal;
    /**
     * @OA\Property(
     *     description="supervisior",
     *     title="supervisior",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=248,
     * )
     *
     */
    private $supervisior;
    /**
     * @OA\Property(
     *     description="staff",
     *     title="staff",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=248,
     * )
     *
     */
    private $staff;
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
    /**
     * @OA\Property(
     *     description="kode_tim",
     *     title="kode_tim",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=100,
     * )
     *
     */
    private $kode_tim;
    /**
     * @OA\Property(
     *     description="nama_tim",
     *     title="nama_tim",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=100,
     * )
     *
     */
    private $nama_tim;
}
/**
 *
 * @OA\RequestBody(
 *     request="TimFundraising",
 *     description="TimFundraising object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/TimFundraising"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/TimFundraising")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/TimFundraising")
 *     )
 * )
 */
