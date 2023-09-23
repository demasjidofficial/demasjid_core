<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Sitemenus extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SitemenusModel';

    /**
    * @OA\Get(
    *     path="/sitemenus",
    *     tags={"Sitemenus"},
    *     summary="Find list Sitemenus",
    *     description="Returns list of Sitemenus",
    *     operationId="getSitemenus",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitemenus")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitemenus")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Sitemenus")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Sitemenus not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/sitemenus/{id}",
     *     tags={"Sitemenus"},
     *     summary="Find Sitemenus by ID",
     *     description="Returns a single Sitemenus",
     *     operationId="getSitemenusById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Sitemenus to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Sitemenus"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitemenus"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Sitemenus not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/sitemenus",
     *     tags={"Sitemenus"},
     *     summary="Add a new Sitemenus to the store",
     *     operationId="addSitemenus",
     *     @OA\Response(
     *         response=201,
     *         description="Created Sitemenus",
     *         @OA\JsonContent(ref="#/components/schemas/Sitemenus"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitemenus"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitemenus"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sitemenus/{id}",
     *     tags={"Sitemenus"},
     *     summary="Update an existing Sitemenus",
     *     operationId="updateSitemenus",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitemenus id to update",
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
     *         description="Sitemenus not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitemenus"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sitemenus/{id}",
     *     tags={"Sitemenus"},
     *     summary="Deletes a Sitemenus",
     *     operationId="deleteSitemenus",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitemenus id to delete",
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
