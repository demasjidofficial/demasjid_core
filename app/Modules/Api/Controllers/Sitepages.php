<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Sitepages extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SitepagesModel';

    /**
    * @OA\Get(
    *     path="/sitepages",
    *     tags={"Sitepages"},
    *     summary="Find list Sitepages",
    *     description="Returns list of Sitepages",
    *     operationId="getSitepages",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitepages")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitepages")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Sitepages")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Sitepages not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/sitepages/{id}",
     *     tags={"Sitepages"},
     *     summary="Find Sitepages by ID",
     *     description="Returns a single Sitepages",
     *     operationId="getSitepagesById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Sitepages to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Sitepages"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitepages"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Sitepages not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/sitepages",
     *     tags={"Sitepages"},
     *     summary="Add a new Sitepages to the store",
     *     operationId="addSitepages",
     *     @OA\Response(
     *         response=201,
     *         description="Created Sitepages",
     *         @OA\JsonContent(ref="#/components/schemas/Sitepages"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitepages"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitepages"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sitepages/{id}",
     *     tags={"Sitepages"},
     *     summary="Update an existing Sitepages",
     *     operationId="updateSitepages",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitepages id to update",
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
     *         description="Sitepages not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitepages"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sitepages/{id}",
     *     tags={"Sitepages"},
     *     summary="Deletes a Sitepages",
     *     operationId="deleteSitepages",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitepages id to delete",
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
