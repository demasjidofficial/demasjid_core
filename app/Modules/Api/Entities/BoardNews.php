<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class BoardNews
* @OA\Schema(
*     title="BoardNews",
*     description="BoardNews"
* )
*
* @OA\Tag(
*     name="BoardNews",
*     description="Everything about your BoardNews"
* )
*/
class BoardNews extends BaseEntity
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
     *     description="board_newsbg_id",
     *     title="board_newsbg_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $board_newsbg_id;
    /**
     * @OA\Property(
     *     description="board_newsruntext_id",
     *     title="board_newsruntext_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $board_newsruntext_id;
    /**
     * @OA\Property(
     *     description="rawatib_schedule_id",
     *     title="rawatib_schedule_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $rawatib_schedule_id;
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
 *     request="BoardNews",
 *     description="BoardNews object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/BoardNews"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/BoardNews")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/BoardNews")
 *     )
 * )
 */
