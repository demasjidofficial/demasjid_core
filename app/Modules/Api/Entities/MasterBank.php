<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class MasterBank
* @OA\Schema(
*     title="MasterBank",
*     description="MasterBank"
* )
*
* @OA\Tag(
*     name="MasterBank",
*     description="Everything about your MasterBank"
* )
*/
class MasterBank extends BaseEntity
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
     *     description="logo",
     *     title="logo",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * )
     *
     */
    private $logo;
    /**
     * @OA\Property(
     *     description="bank",
     *     title="bank",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=50,
     * )
     *
     */
    private $bank;
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
 *     request="MasterBank",
 *     description="MasterBank object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/MasterBank"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/MasterBank")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/MasterBank")
 *     )
 * )
 */
