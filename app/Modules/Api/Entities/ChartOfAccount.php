<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class ChartOfAccount
* @OA\Schema(
*     title="ChartOfAccount",
*     description="ChartOfAccount"
* )
*
* @OA\Tag(
*     name="ChartOfAccount",
*     description="Everything about your ChartOfAccount"
* )
*/
class ChartOfAccount extends BaseEntity
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
     *     description="code",
     *     title="code",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=10,
     * )
     *
     */
    private $code;
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
     *     description="group_account",
     *     title="group_account",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=60,
     * )
     *
     */
    private $group_account;
    /**
     * @OA\Property(
     *     description="entity_id",
     *     title="entity_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=false,
     * )
     *
     */
    private $entity_id;
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
 *     request="ChartOfAccount",
 *     description="ChartOfAccount object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/ChartOfAccount"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/ChartOfAccount")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/ChartOfAccount")
 *     )
 * )
 */
