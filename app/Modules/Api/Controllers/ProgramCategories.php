<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class ProgramCategories extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\ProgramCategoryModel';

    /**
    * @OA\Get(
    *     path="/programCategories",
    *     tags={"ProgramCategory"},
    *     summary="Find list ProgramCategory",
    *     description="Returns list of ProgramCategory",
    *     operationId="getProgramCategory",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/ProgramCategory")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/ProgramCategory")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/ProgramCategory")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="ProgramCategory not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/programCategories/{id}",
     *     tags={"ProgramCategory"},
     *     summary="Find ProgramCategory by ID",
     *     description="Returns a single ProgramCategory",
     *     operationId="getProgramCategoryById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of ProgramCategory to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProgramCategory"),
     *         @OA\XmlContent(ref="#/components/schemas/ProgramCategory"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="ProgramCategory not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/programCategories",
     *     tags={"ProgramCategory"},
     *     summary="Add a new ProgramCategory to the store",
     *     operationId="addProgramCategory",
     *     @OA\Response(
     *         response=201,
     *         description="Created ProgramCategory",
     *         @OA\JsonContent(ref="#/components/schemas/ProgramCategory"),
     *         @OA\XmlContent(ref="#/components/schemas/ProgramCategory"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/ProgramCategory"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/programCategories/{id}",
     *     tags={"ProgramCategory"},
     *     summary="Update an existing ProgramCategory",
     *     operationId="updateProgramCategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ProgramCategory id to update",
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
     *         description="ProgramCategory not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/ProgramCategory"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/programCategories/{id}",
     *     tags={"ProgramCategory"},
     *     summary="Deletes a ProgramCategory",
     *     operationId="deleteProgramCategory",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ProgramCategory id to delete",
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
