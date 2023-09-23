<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Languages
* @OA\Schema(
*     title="Languages",
*     description="Languages"
* )
*
* @OA\Tag(
*     name="Languages",
*     description="Everything about your Languages"
* )
*/
class Languages extends BaseEntity
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
     * 	   nullable=false,
     * 	   maxLength=255,
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
     * 	   maxLength=255,
     * )
     *
     */
    private $name;
    /**
     * @OA\Property(
     *     description="path_icon",
     *     title="path_icon",
     *     type="string",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=255,
     * )
     *
     */
    private $path_icon;
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
 *     request="Languages",
 *     description="Languages object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Languages"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Languages")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Languages")
 *     )
 * )
 */
