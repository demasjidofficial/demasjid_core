<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Sitepages
* @OA\Schema(
*     title="Sitepages",
*     description="Sitepages"
* )
*
* @OA\Tag(
*     name="Sitepages",
*     description="Everything about your Sitepages"
* )
*/
class Sitepages extends BaseEntity
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
     *     description="title",
     *     title="title",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $title;
    /**
     * @OA\Property(
     *     description="subtitle",
     *     title="subtitle",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $subtitle;
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
     *     description="content",
     *     title="content",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * )
     *
     */
    private $content;
    /**
     * @OA\Property(
     *     description="permalink",
     *     title="permalink",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $permalink;
    /**
     * @OA\Property(
     *     description="meta_title",
     *     title="meta_title",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * 	   maxLength=255,
     * )
     *
     */
    private $meta_title;
    /**
     * @OA\Property(
     *     description="meta_desc",
     *     title="meta_desc",
     *     type="string",
     * 	   format="-",
     * 	   nullable=false,
     * )
     *
     */
    private $meta_desc;
    /**
     * @OA\Property(
     *     description="sitemenu_id",
     *     title="sitemenu_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * )
     *
     */
    private $sitemenu_id;
    /**
     * @OA\Property(
     *     description="language_id",
     *     title="language_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * )
     *
     */
    private $language_id;
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
 *     request="Sitepages",
 *     description="Sitepages object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Sitepages"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Sitepages")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Sitepages")
 *     )
 * )
 */
