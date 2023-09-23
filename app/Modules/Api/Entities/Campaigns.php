<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Campaigns
* @OA\Schema(
*     title="Campaigns",
*     description="Campaigns"
* )
*
* @OA\Tag(
*     name="Campaigns",
*     description="Everything about your Campaigns"
* )
*/
class Campaigns extends BaseEntity
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
     *     description="status",
     *     title="status",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=10,
     * )
     *
     */
    private $status;
    /**
     * @OA\Property(
     *     description="is_active",
     *     title="is_active",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=5,
     * )
     *
     */
    private $is_active;
    /**
     * @OA\Property(
     *     description="is_delete",
     *     title="is_delete",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=5,
     * )
     *
     */
    private $is_delete;
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
     *     description="create_date",
     *     title="create_date",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $create_date;
    /**
     * @OA\Property(
     *     description="modified_by",
     *     title="modified_by",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $modified_by;
    /**
     * @OA\Property(
     *     description="modified_date",
     *     title="modified_date",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $modified_date;
}
/**
 *
 * @OA\RequestBody(
 *     request="Campaigns",
 *     description="Campaigns object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Campaigns"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Campaigns")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Campaigns")
 *     )
 * )
 */
