<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Bminfaqshodaqoh
* @OA\Schema(
*     title="Bminfaqshodaqoh",
*     description="Bminfaqshodaqoh"
* )
*
* @OA\Tag(
*     name="Bminfaqshodaqoh",
*     description="Everything about your Bminfaqshodaqoh"
* )
*/
class Bminfaqshodaqoh extends BaseEntity
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
     *     description="needed_funds",
     *     title="needed_funds",
     *     type="number",
     * 	   format="float",
     * 	   nullable=true,
     * 	   maxLength=10,
     * )
     *
     */
    private $needed_funds;
    /**
     * @OA\Property(
     *     description="collected_funds",
     *     title="collected_funds",
     *     type="number",
     * 	   format="float",
     * 	   nullable=true,
     * 	   maxLength=10,
     * )
     *
     */
    private $collected_funds;
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
     *     description="program_id",
     *     title="program_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * )
     *
     */
    private $program_id;
    /**
     * @OA\Property(
     *     description="category_id",
     *     title="category_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * )
     *
     */
    private $category_id;
    /**
     * @OA\Property(
     *     description="donationtype_id",
     *     title="donationtype_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * )
     *
     */
    private $donationtype_id;
    /**
     * @OA\Property(
     *     description="state",
     *     title="state",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=20,
     * )
     *
     */
    private $state;
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
 *     request="Bminfaqshodaqoh",
 *     description="Bminfaqshodaqoh object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Bminfaqshodaqoh"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Bminfaqshodaqoh")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Bminfaqshodaqoh")
 *     )
 * )
 */
