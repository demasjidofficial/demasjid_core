<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Uoms extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\UomModel';

    /**
    * @OA\Get(
    *     path="/uoms",
    *     tags={"Uom"},
    *     summary="Find list Uom",
    *     description="Returns list of Uom",
    *     operationId="getUom",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Uom")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Uom")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Uom")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Uom not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/uoms/{id}",
     *     tags={"Uom"},
     *     summary="Find Uom by ID",
     *     description="Returns a single Uom",
     *     operationId="getUomById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Uom to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Uom"),
     *         @OA\XmlContent(ref="#/components/schemas/Uom"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Uom not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/uoms",
     *     tags={"Uom"},
     *     summary="Add a new Uom to the store",
     *     operationId="addUom",
     *     @OA\Response(
     *         response=201,
     *         description="Created Uom",
     *         @OA\JsonContent(ref="#/components/schemas/Uom"),
     *         @OA\XmlContent(ref="#/components/schemas/Uom"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Uom"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/uoms/{id}",
     *     tags={"Uom"},
     *     summary="Update an existing Uom",
     *     operationId="updateUom",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Uom id to update",
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
     *         description="Uom not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Uom"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/uoms/{id}",
     *     tags={"Uom"},
     *     summary="Deletes a Uom",
     *     operationId="deleteUom",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Uom id to delete",
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
