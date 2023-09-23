<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Entity
* @OA\Schema(
*     title="Entity",
*     description="Entity"
* )
*
* @OA\Tag(
*     name="Entity",
*     description="Everything about your Entity"
* )
*/
class Entity extends BaseEntity
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
     *     description="type",
     *     title="type",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=20,
     * )
     *
     */
    private $type;
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

    protected $datamap = [
        'created_name' => 'full_name',
    ];

    public function getFullName()
    {

        return $this->first_name.' '.$this->last_name;
    }
}
/**
 *
 * @OA\RequestBody(
 *     request="Entity",
 *     description="Entity object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Entity"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Entity")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Entity")
 *     )
 * )
 */
