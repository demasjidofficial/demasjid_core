<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Donasi
* @OA\Schema(
*     title="Donasi",
*     description="Donasi"
* )
*
* @OA\Tag(
*     name="Donasi",
*     description="Everything about your Donasi"
* )
*/
class Donasi extends BaseEntity
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
     *     description="id_donatur",
     *     title="id_donatur",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $id_donatur;
    /**
     * @OA\Property(
     *     description="id_pembayaran",
     *     title="id_pembayaran",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $id_pembayaran;
    /**
     * @OA\Property(
     *     description="id_program",
     *     title="id_program",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=11,
     * )
     *
     */
    private $id_program;
    /**
     * @OA\Property(
     *     description="dana_in",
     *     title="dana_in",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=2,
     * )
     *
     */
    private $dana_in;
    /**
     * @OA\Property(
     *     description="tgl_transaksi",
     *     title="tgl_transaksi",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $tgl_transaksi;
    /**
     * @OA\Property(
     *     description="bukti_pembayaran",
     *     title="bukti_pembayaran",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * )
     *
     */
    private $bukti_pembayaran;
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
 *     request="Donasi",
 *     description="Donasi object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Donasi"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Donasi")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Donasi")
 *     )
 * )
 */
