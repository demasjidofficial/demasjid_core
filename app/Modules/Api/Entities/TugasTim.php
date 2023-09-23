<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class TugasTim
* @OA\Schema(
*     title="TugasTim",
*     description="TugasTim"
* )
*
* @OA\Tag(
*     name="TugasTim",
*     description="Everything about your TugasTim"
* )
*/
class TugasTim extends BaseEntity
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
     *     description="staff_id",
     *     title="staff_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $staff_id;
    /**
     * @OA\Property(
     *     description="tugas",
     *     title="tugas",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $tugas;
    /**
     * @OA\Property(
     *     description="nominal",
     *     title="nominal",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $nominal;
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
     *     description="progres",
     *     title="progres",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=100,
     * )
     *
     */
    private $progres;
    /**
     * @OA\Property(
     *     description="nominal_target",
     *     title="nominal_target",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $nominal_target;
    /**
     * @OA\Property(
     *     description="img_serah_terima",
     *     title="img_serah_terima",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=100,
     * )
     *
     */
    private $img_serah_terima;
    /**
     * @OA\Property(
     *     description="kode_tugas",
     *     title="kode_tugas",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=100,
     * )
     *
     */
    private $kode_tugas;
    /**
     * @OA\Property(
     *     description="img_ttd_serah_terima",
     *     title="img_ttd_serah_terima",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=100,
     * )
     *
     */
    private $img_ttd_serah_terima;
}
/**
 *
 * @OA\RequestBody(
 *     request="TugasTim",
 *     description="TugasTim object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/TugasTim"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/TugasTim")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/TugasTim")
 *     )
 * )
 */
