<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class TargetFundraisings extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\TargetFundraisingModel';

    /**
    * @OA\Get(
    *     path="/targetFundraisings",
    *     tags={"TargetFundraising"},
    *     summary="Find list TargetFundraising",
    *     description="Returns list of TargetFundraising",
    *     operationId="getTargetFundraising",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TargetFundraising")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/TargetFundraising")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/TargetFundraising")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="TargetFundraising not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/targetFundraisings/{id}",
     *     tags={"TargetFundraising"},
     *     summary="Find TargetFundraising by ID",
     *     description="Returns a single TargetFundraising",
     *     operationId="getTargetFundraisingById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of TargetFundraising to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/TargetFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/TargetFundraising"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="TargetFundraising not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/targetFundraisings",
     *     tags={"TargetFundraising"},
     *     summary="Add a new TargetFundraising to the store",
     *     operationId="addTargetFundraising",
     *     @OA\Response(
     *         response=201,
     *         description="Created TargetFundraising",
     *         @OA\JsonContent(ref="#/components/schemas/TargetFundraising"),
     *         @OA\XmlContent(ref="#/components/schemas/TargetFundraising"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TargetFundraising"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/targetFundraisings/{id}",
     *     tags={"TargetFundraising"},
     *     summary="Update an existing TargetFundraising",
     *     operationId="updateTargetFundraising",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TargetFundraising id to update",
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
     *         description="TargetFundraising not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/TargetFundraising"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/targetFundraisings/{id}",
     *     tags={"TargetFundraising"},
     *     summary="Deletes a TargetFundraising",
     *     operationId="deleteTargetFundraising",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="TargetFundraising id to delete",
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
