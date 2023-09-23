<?php

namespace App\Modules\Api\Controllers;

use asligresik\easyapi\Controllers\BaseResourceController;

class BoardNews extends BaseResourceController
{
    protected $modelName = 'App\Modules\Api\Models\BoardNewsModel';

    /**
    * @OA\Get(
    *     path="/boardNews",
    *     tags={"BoardNews"},
    *     summary="Find list BoardNews",
    *     description="Returns list of BoardNews",
    *     operationId="getBoardNews",
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
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardNews")),
    *            @OA\Property(property="pagination",type="object",@OA\Property(property="currentPage", type="integer"),@OA\Property(property="totalPage", type="integer")),
    *         ),
    *         @OA\XmlContent(type="object",
    *            @OA\Property(property="data",type="array",@OA\Items(ref="#/components/schemas/BoardNews")),
    *            @OA\Property(property="pagination",type="array",@OA\Items(ref="#/components/schemas/BoardNews")),
    *         ),
    *     ),
    *     @OA\Response(
    *         response=404,
    *         description="BoardNews not found"
    *     ),
    *     security={
    *         {"bearer_auth": {}}
    *     }
    * )
    *
    */

    /**
     * @OA\Get(
     *     path="/boardNews/{id}",
     *     tags={"BoardNews"},
     *     summary="Find BoardNews by ID",
     *     description="Returns a single BoardNews",
     *     operationId="getBoardNewsById",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="ID of BoardNews to return",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *             format="int64"
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *         @OA\JsonContent(ref="#/components/schemas/BoardNews"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardNews"),
     *     ),
     *     @OA\Response(
     *         response=400,
     *         description="Invalid ID supplier"
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="BoardNews not found"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     }
     * )
     *
     */

    /**
     * @OA\Post(
     *     path="/boardNews",
     *     tags={"BoardNews"},
     *     summary="Add a new BoardNews to the store",
     *     operationId="addBoardNews",
     *     @OA\Response(
     *         response=201,
     *         description="Created BoardNews",
     *         @OA\JsonContent(ref="#/components/schemas/BoardNews"),
     *         @OA\XmlContent(ref="#/components/schemas/BoardNews"),
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Invalid input"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/BoardNews"}
     * )
     */

    /**
     * @OA\Put(
     *     path="/boardNews/{id}",
     *     tags={"BoardNews"},
     *     summary="Update an existing BoardNews",
     *     operationId="updateBoardNews",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardNews id to update",
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
     *         description="BoardNews not found"
     *     ),
     *     @OA\Response(
     *         response=405,
     *         description="Validation exception"
     *     ),
     *     security={
     *         {"bearer_auth": {}}
     *     },
     *     requestBody={"$ref": "#/components/requestBodies/BoardNews"}
     * )
     */

    /**
     * @OA\Delete(
     *     path="/boardNews/{id}",
     *     tags={"BoardNews"},
     *     summary="Deletes a BoardNews",
     *     operationId="deleteBoardNews",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         description="BoardNews id to delete",
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
