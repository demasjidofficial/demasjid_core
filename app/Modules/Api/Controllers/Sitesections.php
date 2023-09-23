<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Sitesections extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SitesectionsModel';

    /**
    * @OA\Get(
    *     path="/sitesections",
    *     tags={"Sitesections"},
    *     summary="Find list Sitesections",
    *     description="Returns list of Sitesections",
    *     operationId="getSitesections",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitesections")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitesections")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Sitesections")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Sitesections not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/sitesections/{id}",
     *     tags={"Sitesections"},
     *     summary="Find Sitesections by ID",
     *     description="Returns a single Sitesections",
     *     operationId="getSitesectionsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Sitesections to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Sitesections"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitesections"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Sitesections not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/sitesections",
     *     tags={"Sitesections"},
     *     summary="Add a new Sitesections to the store",
     *     operationId="addSitesections",
     *     @OA\Response(
     *         response=201,
     *         description="Created Sitesections",
     *         @OA\JsonContent(ref="#/components/schemas/Sitesections"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitesections"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitesections"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sitesections/{id}",
     *     tags={"Sitesections"},
     *     summary="Update an existing Sitesections",
     *     operationId="updateSitesections",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitesections id to update",
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
     *         description="Sitesections not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitesections"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sitesections/{id}",
     *     tags={"Sitesections"},
     *     summary="Deletes a Sitesections",
     *     operationId="deleteSitesections",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitesections id to delete",
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
