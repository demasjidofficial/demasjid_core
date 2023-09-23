<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class RoomReservation
* @OA\Schema(
*     title="RoomReservation",
*     description="RoomReservation"
* )
*
* @OA\Tag(
*     name="RoomReservation",
*     description="Everything about your RoomReservation"
* )
*/
class RoomReservation extends BaseEntity
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
     *     description="room_id",
     *     title="room_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $room_id;
    /**
     * @OA\Property(
     *     description="namapemesan",
     *     title="namapemesan",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $namapemesan;
    /**
     * @OA\Property(
     *     description="no_tlp",
     *     title="no_tlp",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=25,
     * )
     *
     */
    private $no_tlp;
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
     *     description="start_date",
     *     title="start_date",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $start_date;
    /**
     * @OA\Property(
     *     description="end_date",
     *     title="end_date",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $end_date;
    /**
     * @OA\Property(
     *     description="agenda",
     *     title="agenda",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=50,
     * )
     *
     */
    private $agenda;
    /**
     * @OA\Property(
     *     description="keterangan",
     *     title="keterangan",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=50,
     * )
     *
     */
    private $keterangan;
    /**
     * @OA\Property(
     *     description="status",
     *     title="status",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=20,
     * )
     *
     */
    private $status;
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
 *     request="RoomReservation",
 *     description="RoomReservation object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/RoomReservation"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/RoomReservation")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/RoomReservation")
 *     )
 * )
 */
