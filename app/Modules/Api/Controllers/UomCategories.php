<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class UomCategories extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\UomCategoryModel';

    /**
    * @OA\Get(
    *     path="/uomCategories",
    *     tags={"UomCategory"},
    *     summary="Find list UomCategory",
    *     description="Returns list of UomCategory",
    *     operationId="getUomCategory",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/UomCategory")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/UomCategory")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/UomCategory")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="UomCategory not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/uomCategories/{id}",
     *     tags={"UomCategory"},
     *     summary="Find UomCategory by ID",
     *     description="Returns a single UomCategory",
     *     operationId="getUomCategoryById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of UomCategory to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/UomCategory"),
     *         @OA\XmlContent(ref="#/components/schemas/UomCategory"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="UomCategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/uomCategories",
     *     tags={"UomCategory"},
     *     summary="Add a new UomCategory to the store",
     *     operationId="addUomCategory",
     *     @OA\Response(
     *         response=201,
     *         description="Created UomCategory",
     *         @OA\JsonContent(ref="#/components/schemas/UomCategory"),
     *         @OA\XmlContent(ref="#/components/schemas/UomCategory"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/UomCategory"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/uomCategories/{id}",
     *     tags={"UomCategory"},
     *     summary="Update an existing UomCategory",
     *     operationId="updateUomCategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="UomCategory id to update",
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
     *         description="UomCategory not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/UomCategory"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/uomCategories/{id}",
     *     tags={"UomCategory"},
     *     summary="Deletes a UomCategory",
     *     operationId="deleteUomCategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="UomCategory id to delete",
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
