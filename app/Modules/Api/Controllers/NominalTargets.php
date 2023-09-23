<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class NominalTargets extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\NominalTargetModel';

    /**
    * @OA\Get(
    *     path="/nominalTargets",
    *     tags={"NominalTarget"},
    *     summary="Find list NominalTarget",
    *     description="Returns list of NominalTarget",
    *     operationId="getNominalTarget",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/NominalTarget")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/NominalTarget")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/NominalTarget")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="NominalTarget not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/nominalTargets/{id}",
     *     tags={"NominalTarget"},
     *     summary="Find NominalTarget by ID",
     *     description="Returns a single NominalTarget",
     *     operationId="getNominalTargetById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of NominalTarget to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/NominalTarget"),
     *         @OA\XmlContent(ref="#/components/schemas/NominalTarget"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="NominalTarget not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/nominalTargets",
     *     tags={"NominalTarget"},
     *     summary="Add a new NominalTarget to the store",
     *     operationId="addNominalTarget",
     *     @OA\Response(
     *         response=201,
     *         description="Created NominalTarget",
     *         @OA\JsonContent(ref="#/components/schemas/NominalTarget"),
     *         @OA\XmlContent(ref="#/components/schemas/NominalTarget"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/NominalTarget"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/nominalTargets/{id}",
     *     tags={"NominalTarget"},
     *     summary="Update an existing NominalTarget",
     *     operationId="updateNominalTarget",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="NominalTarget id to update",
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
     *         description="NominalTarget not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/NominalTarget"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/nominalTargets/{id}",
     *     tags={"NominalTarget"},
     *     summary="Deletes a NominalTarget",
     *     operationId="deleteNominalTarget",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="NominalTarget id to delete",
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
