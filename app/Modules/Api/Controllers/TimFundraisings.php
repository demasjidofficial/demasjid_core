<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class TimFundraisings extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\TimFundraisingModel';

    /**
    * @OA\Get(
    *     path="/timFundraisings",
    *     tags={"TimFundraising"},
    *     summary="Find list TimFundraising",
    *     description="Returns list of TimFundraising",
    *     operationId="getTimFundraising",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TimFundraising")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TimFundraising")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/TimFundraising")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="TimFundraising not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/timFundraisings/{id}",
     *     tags={"TimFundraising"},
     *     summary="Find TimFundraising by ID",
     *     description="Returns a single TimFundraising",
     *     operationId="getTimFundraisingById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of TimFundraising to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/TimFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/TimFundraising"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="TimFundraising not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/timFundraisings",
     *     tags={"TimFundraising"},
     *     summary="Add a new TimFundraising to the store",
     *     operationId="addTimFundraising",
     *     @OA\Response(
     *         response=201,
     *         description="Created TimFundraising",
     *         @OA\JsonContent(ref="#/components/schemas/TimFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/TimFundraising"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TimFundraising"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/timFundraisings/{id}",
     *     tags={"TimFundraising"},
     *     summary="Update an existing TimFundraising",
     *     operationId="updateTimFundraising",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TimFundraising id to update",
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
     *         description="TimFundraising not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TimFundraising"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/timFundraisings/{id}",
     *     tags={"TimFundraising"},
     *     summary="Deletes a TimFundraising",
     *     operationId="deleteTimFundraising",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TimFundraising id to delete",
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
