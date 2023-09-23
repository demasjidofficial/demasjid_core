<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class ProgramCategory
* @OA\Schema(
*     title="ProgramCategory",
*     description="ProgramCategory"
* )
*
* @OA\Tag(
*     name="ProgramCategory",
*     description="Everything about your ProgramCategory"
* )
*/
class ProgramCategory extends BaseEntity
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
     * 	   maxLength=50,
     * )
     *
     */
    private $name;
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
}
/**
 *
 * @OA\RequestBody(
 *     request="ProgramCategory",
 *     description="ProgramCategory object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/ProgramCategory"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/ProgramCategory")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/ProgramCategory")
 *     )
 * )
 */
