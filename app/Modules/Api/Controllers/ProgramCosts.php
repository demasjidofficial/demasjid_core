<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class ProgramCosts extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\ProgramCostModel';

    /**
    * @OA\Get(
    *     path="/programCosts",
    *     tags={"ProgramCost"},
    *     summary="Find list ProgramCost",
    *     description="Returns list of ProgramCost",
    *     operationId="getProgramCost",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/ProgramCost")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/ProgramCost")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/ProgramCost")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="ProgramCost not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/programCosts/{id}",
     *     tags={"ProgramCost"},
     *     summary="Find ProgramCost by ID",
     *     description="Returns a single ProgramCost",
     *     operationId="getProgramCostById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of ProgramCost to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/ProgramCost"),
     *         @OA\XmlContent(ref="#/components/schemas/ProgramCost"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="ProgramCost not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/programCosts",
     *     tags={"ProgramCost"},
     *     summary="Add a new ProgramCost to the store",
     *     operationId="addProgramCost",
     *     @OA\Response(
     *         response=201,
     *         description="Created ProgramCost",
     *         @OA\JsonContent(ref="#/components/schemas/ProgramCost"),
     *         @OA\XmlContent(ref="#/components/schemas/ProgramCost"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/ProgramCost"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/programCosts/{id}",
     *     tags={"ProgramCost"},
     *     summary="Update an existing ProgramCost",
     *     operationId="updateProgramCost",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ProgramCost id to update",
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
     *         description="ProgramCost not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/ProgramCost"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/programCosts/{id}",
     *     tags={"ProgramCost"},
     *     summary="Deletes a ProgramCost",
     *     operationId="deleteProgramCost",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ProgramCost id to delete",
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
