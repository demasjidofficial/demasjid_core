<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Donaturcategory
* @OA\Schema(
*     title="Donaturcategory",
*     description="Donaturcategory"
* )
*
* @OA\Tag(
*     name="Donaturcategory",
*     description="Everything about your Donaturcategory"
* )
*/
class Donaturcategory extends BaseEntity
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
}
/**
 *
 * @OA\RequestBody(
 *     request="Donaturcategory",
 *     description="Donaturcategory object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Donaturcategory"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Donaturcategory")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Donaturcategory")
 *     )
 * )
 */
