<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class Sitefooters extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\SitefooterModel';

    /**
    * @OA\Get(
    *     path="/sitefooters",
    *     tags={"Sitefooter"},
    *     summary="Find list Sitefooter",
    *     description="Returns list of Sitefooter",
    *     operationId="getSitefooter",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitefooter")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/Sitefooter")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/Sitefooter")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="Sitefooter not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/sitefooters/{id}",
     *     tags={"Sitefooter"},
     *     summary="Find Sitefooter by ID",
     *     description="Returns a single Sitefooter",
     *     operationId="getSitefooterById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of Sitefooter to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/Sitefooter"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitefooter"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Sitefooter not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/sitefooters",
     *     tags={"Sitefooter"},
     *     summary="Add a new Sitefooter to the store",
     *     operationId="addSitefooter",
     *     @OA\Response(
     *         response=201,
     *         description="Created Sitefooter",
     *         @OA\JsonContent(ref="#/components/schemas/Sitefooter"),
     *         @OA\XmlContent(ref="#/components/schemas/Sitefooter"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitefooter"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/sitefooters/{id}",
     *     tags={"Sitefooter"},
     *     summary="Update an existing Sitefooter",
     *     operationId="updateSitefooter",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitefooter id to update",
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
     *         description="Sitefooter not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/Sitefooter"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/sitefooters/{id}",
     *     tags={"Sitefooter"},
     *     summary="Deletes a Sitefooter",
     *     operationId="deleteSitefooter",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="Sitefooter id to delete",
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
