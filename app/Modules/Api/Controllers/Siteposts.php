<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Siteposts extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SitepostsModel';

    /**
    * @OA\Get(
    *     path="/siteposts",
    *     tags={"Siteposts"},
    *     summary="Find list Siteposts",
    *     description="Returns list of Siteposts",
    *     operationId="getSiteposts",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Siteposts")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Siteposts")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Siteposts")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Siteposts not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/siteposts/{id}",
     *     tags={"Siteposts"},
     *     summary="Find Siteposts by ID",
     *     description="Returns a single Siteposts",
     *     operationId="getSitepostsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Siteposts to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Siteposts"),
     *         @OA\XmlContent(ref="#/components/schemas/Siteposts"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Siteposts not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/siteposts",
     *     tags={"Siteposts"},
     *     summary="Add a new Siteposts to the store",
     *     operationId="addSiteposts",
     *     @OA\Response(
     *         response=201,
     *         description="Created Siteposts",
     *         @OA\JsonContent(ref="#/components/schemas/Siteposts"),
     *         @OA\XmlContent(ref="#/components/schemas/Siteposts"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Siteposts"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/siteposts/{id}",
     *     tags={"Siteposts"},
     *     summary="Update an existing Siteposts",
     *     operationId="updateSiteposts",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Siteposts id to update",
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
     *         description="Siteposts not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Siteposts"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/siteposts/{id}",
     *     tags={"Siteposts"},
     *     summary="Deletes a Siteposts",
     *     operationId="deleteSiteposts",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Siteposts id to delete",
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
