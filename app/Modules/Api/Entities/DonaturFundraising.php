<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class DonaturFundraising
* @OA\Schema(
*     title="DonaturFundraising",
*     description="DonaturFundraising"
* )
*
* @OA\Tag(
*     name="DonaturFundraising",
*     description="Everything about your DonaturFundraising"
* )
*/
class DonaturFundraising extends BaseEntity
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
     *     description="tugas_id",
     *     title="tugas_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $tugas_id;
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
     *     description="no_transaksi",
     *     title="no_transaksi",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=255,
     * )
     *
     */
    private $no_transaksi;
    /**
     * @OA\Property(
     *     description="tanggal_transaksi",
     *     title="tanggal_transaksi",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $tanggal_transaksi;
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
     *     description="path_signature",
     *     title="path_signature",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=255,
     * )
     *
     */
    private $path_signature;
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
     *     description="alamat",
     *     title="alamat",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $alamat;
    /**
     * @OA\Property(
     *     description="email",
     *     title="email",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $email;
    /**
     * @OA\Property(
     *     description="nohp",
     *     title="nohp",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=20,
     * )
     *
     */
    private $nohp;
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
 *     request="DonaturFundraising",
 *     description="DonaturFundraising object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/DonaturFundraising"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/DonaturFundraising")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/DonaturFundraising")
 *     )
 * )
 */
