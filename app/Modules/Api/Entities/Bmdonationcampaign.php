<?php

namespace App\Modules\Api\Entities;

use asligresik\easyapi\Entities\BaseEntity;

/**
* Class Bmdonationcampaign
* @OA\Schema(
*     title="Bmdonationcampaign",
*     description="Bmdonationcampaign"
* )
*
* @OA\Tag(
*     name="Bmdonationcampaign",
*     description="Everything about your Bmdonationcampaign"
* )
*/
class Bmdonationcampaign extends BaseEntity
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
     * 	   maxLength=255,
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
     * 	   nullable=true,
     * 	   maxLength=255,
     * )
     *
     */
    private $description;
    /**
     * @OA\Property(
     *     description="campaignstart_date",
     *     title="campaignstart_date",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $campaignstart_date;
    /**
     * @OA\Property(
     *     description="campaignend_date",
     *     title="campaignend_date",
     *     type="string",
     * 	   format="date",
     * 	   nullable=false,
     * )
     *
     */
    private $campaignend_date;
    /**
     * @OA\Property(
     *     description="campaign_tonase",
     *     title="campaign_tonase",
     *     type="number",
     * 	   format="float",
     * 	   nullable=true,
     * 	   maxLength=10,
     * )
     *
     */
    private $campaign_tonase;
    /**
     * @OA\Property(
     *     description="campaigncategory_id",
     *     title="campaigncategory_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
     * )
     *
     */
    private $campaigncategory_id;
    /**
     * @OA\Property(
     *     description="donationtype_id",
     *     title="donationtype_id",
     *     type="integer",
     * 	   format="-",
     * 	   nullable=true,
     * 	   maxLength=11,
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
     * 	   maxLength=11,
     * )
     *
     */
    private $created_by;
}
/**
 *
 * @OA\RequestBody(
 *     request="Bmdonationcampaign",
 *     description="Bmdonationcampaign object that needs to be added",
 *     @OA\JsonContent(ref="#/components/schemas/Bmdonationcampaign"),
 *     @OA\MediaType(
 *         mediaType="application/x-www-form-urlencoded",
 *         @OA\Schema(ref="#/components/schemas/Bmdonationcampaign")
 *     ),
 *     @OA\MediaType(
 *         mediaType="application/xml",
 *         @OA\Schema(ref="#/components/schemas/Bmdonationcampaign")
 *     )
 * )
 */
