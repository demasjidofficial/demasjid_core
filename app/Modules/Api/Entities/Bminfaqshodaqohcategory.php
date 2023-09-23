<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Bminfaqshodaqohcategory
* @OA\Schema(
*     title="Bminfaqshodaqohcategory",
*     description="Bminfaqshodaqohcategory"
* )
*
* @OA\Tag(
*     name="Bminfaqshodaqohcategory",
*     description="Everything about your Bminfaqshodaqohcategory"
* )
*/
class Bminfaqshodaqohcategory extends BaseEntity
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
     *     description="name",
     *     title="name",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=128,
     * )
     *
     */
    private $name;
    /**
     * @OA\Property(
     *     description="label",
     *     title="label",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $label;
    /**
     * @OA\Property(
     *     description="description",
     *     title="description",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * )
     *
     */
    private $description;
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
 *     request="Bminfaqshodaqohcategory",
 *     description="Bminfaqshodaqohcategory object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Bminfaqshodaqohcategory"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Bminfaqshodaqohcategory")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Bminfaqshodaqohcategory")
 *     )
 * )
 */
