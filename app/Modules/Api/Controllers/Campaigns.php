<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Campaigns extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\CampaignsModel';

    /**
    * @OA\Get(
    *     path="/campaigns",
    *     tags={"Campaigns"},
    *     summary="Find list Campaigns",
    *     description="Returns list of Campaigns",
    *     operationId="getCampaigns",
    *     @OA\Parameter(
    *         name="search",
    *         in="query",
    *         description="search by column defined",
    *         @OA\Schema(
    *             type="object"
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="order",
    *         in="query",
    *         description="order by column defined",
    *         @OA\Schema(
    *             type="object"
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="page",
    *         in="query",
    *         description="page to show",
    *         @OA\Schema(
    *             type="int32"
    *         )
    *     ),
    *     @OA\Parameter(
    *         name="limit",
    *         in="query",
    *         description="count data display per page",
    *         @OA\Schema(
    *             type="int32"
    *         )
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="successful operation",
    *         @OA\JsonContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Campaigns")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Campaigns")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Campaigns")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Campaigns not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/campaigns/{id}",
     *     tags={"Campaigns"},
     *     summary="Find Campaigns by ID",
     *     description="Returns a single Campaigns",
     *     operationId="getCampaignsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Campaigns to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Campaigns"),
     *         @OA\XmlContent(ref="#/components/schemas/Campaigns"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Campaigns not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/campaigns",
     *     tags={"Campaigns"},
     *     summary="Add a new Campaigns to the store",
     *     operationId="addCampaigns",
     *     @OA\Response(
     *         response=201,
     *         description="Created Campaigns",
     *         @OA\JsonContent(ref="#/components/schemas/Campaigns"),
     *         @OA\XmlContent(ref="#/components/schemas/Campaigns"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Campaigns"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/campaigns/{id}",
     *     tags={"Campaigns"},
     *     summary="Update an existing Campaigns",
     *     operationId="updateCampaigns",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Campaigns id to update",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Campaigns not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Campaigns"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/campaigns/{id}",
     *     tags={"Campaigns"},
     *     summary="Deletes a Campaigns",
     *     operationId="deleteCampaigns",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Campaigns id to delete",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         ),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplied",
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Pet not found",
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     * )
     */
}
