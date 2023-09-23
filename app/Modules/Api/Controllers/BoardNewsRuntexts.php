<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class BoardNewsRuntexts extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BoardNewsRuntextModel';

    /**
    * @OA\Get(
    *     path="/boardNewsRuntexts",
    *     tags={"BoardNewsRuntext"},
    *     summary="Find list BoardNewsRuntext",
    *     description="Returns list of BoardNewsRuntext",
    *     operationId="getBoardNewsRuntext",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardNewsRuntext")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardNewsRuntext")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/BoardNewsRuntext")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="BoardNewsRuntext not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/boardNewsRuntexts/{id}",
     *     tags={"BoardNewsRuntext"},
     *     summary="Find BoardNewsRuntext by ID",
     *     description="Returns a single BoardNewsRuntext",
     *     operationId="getBoardNewsRuntextById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of BoardNewsRuntext to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/BoardNewsRuntext"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardNewsRuntext"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="BoardNewsRuntext not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/boardNewsRuntexts",
     *     tags={"BoardNewsRuntext"},
     *     summary="Add a new BoardNewsRuntext to the store",
     *     operationId="addBoardNewsRuntext",
     *     @OA\Response(
     *         response=201,
     *         description="Created BoardNewsRuntext",
     *         @OA\JsonContent(ref="#/components/schemas/BoardNewsRuntext"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardNewsRuntext"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/BoardNewsRuntext"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/boardNewsRuntexts/{id}",
     *     tags={"BoardNewsRuntext"},
     *     summary="Update an existing BoardNewsRuntext",
     *     operationId="updateBoardNewsRuntext",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardNewsRuntext id to update",
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
     *         description="BoardNewsRuntext not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/BoardNewsRuntext"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/boardNewsRuntexts/{id}",
     *     tags={"BoardNewsRuntext"},
     *     summary="Deletes a BoardNewsRuntext",
     *     operationId="deleteBoardNewsRuntext",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardNewsRuntext id to delete",
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
